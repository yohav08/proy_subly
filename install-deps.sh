# Crear carpetas si no existen
mkdir -p css js PDF sw

#! Bootstrap y js (/css y /js)

# Descargar solo los archivos necesarios (según tu estructura actual)
echo "Descargando Bootstrap (/css y /js)..."
curl -o css/bootstrap.css https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.css
curl -L -o css/bootstrap.min.css https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css
curl -o js/bootstrap.js https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.js
curl -o js/bootstrap.min.js https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js
curl -o js/jquery-3.6.1.min.js https://code.jquery.com/jquery-3.6.1.min.js
echo "Bootstrap descargado y ubicado (/css y /js)"

#! FPDF
# Verificar si el archivo ZIP existe
if [ ! -f "fpdf185.zip" ]; then
    echo "❌ Error: No se encontró el archivo fpdf185.zip en la carpeta actual."
    exit 1
fi
unzip -q fpdf185.zip -d temp_fpdf
mv temp_fpdf/* PDF/
rm -rf temp_fpdf
echo "fpdf185.zip descomprimido y ubicado (/PDF)"

#! Sweetalert2
cd sw
npm install sweetalert2
mv node_modules/sweetalert2/* ./
rm -rf node_modules
rm -f package-lock.json

echo "SweetAlert2 descargado y ubicado (/sw)"
