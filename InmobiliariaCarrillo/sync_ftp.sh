#!/bin/bash
# Sube la carpeta web/ al servidor por FTP usando los datos de .env

notificar() {
   notify-send "$1" "$2" 2>/dev/null || echo "[$1] $2"
}

if ! command -v lftp >/dev/null; then
   echo "Falta lftp. Instálalo con: sudo apt install lftp"
   exit 1
fi

if [ ! -f .env ]; then
   echo "Error: no existe el archivo .env"
   exit 1
fi

if [ ! -f .ftpignore ]; then
   touch .ftpignore
fi

. .env

if [[ -z "${FTP_HOST}" || -z "${FTP_LOCAL}" || -z "${FTP_PASS}" || -z "${FTP_REMOTE}" || -z "${FTP_USER}" ]]; then
   echo "Error: Revisa que .env contenga todos los parámetros rellenos."
   exit 1
fi

EXCLUDE=''
while IFS= read -r linea; do
   [[ -z "$linea" || "$linea" == \#* ]] && continue
   echo "Ignorando $linea"
   EXCLUDE="$EXCLUDE -x ${linea} "
done < .ftpignore

notificar "Sincronización" "Iniciada"

echo "Conectando con $FTP_HOST"
lftp -c "open -u $FTP_USER,$FTP_PASS $FTP_HOST; mirror -v -R -p $EXCLUDE $FTP_LOCAL $FTP_REMOTE; quit"
echo "Sincronización finalizada"

notificar "Sincronización" "Finalizada"

if [ -n "${URL}" ]; then
   echo "Acceder en : ${URL}"
fi
