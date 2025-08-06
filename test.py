import requests
import json

url = 'http://localhost:8080/mydocu/Vista/ajax/ajax_categoriasSub_sub.php'
data = {'id_subcategoria': '1', 'estadoSubcategoria': '1'}

response = requests.post(url, data=data)

# Imprimir el JSON formateado
try:
    json_data = response.json()
    print(json.dumps(json_data, indent=4, ensure_ascii=False))  # ensure_ascii=False para que no escape caracteres como tildes
except ValueError as e:
    print("Respuesta no es JSON válido:")
    print(response.text)
