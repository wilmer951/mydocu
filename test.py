import requests
import json

url = 'http://localhost:8080/mydocu/Vista/api/api_resetPasswrod.php'

# Los datos deben ser enviados como un diccionario y luego convertidos a JSON
data_to_send = {'id_usuario': '1', 'nuevaPassword': '12345'}

# Usar el parámetro 'json' en requests.post para enviar datos como JSON
response = requests.post(url, json=data_to_send)

# Imprimir el JSON formateado
try:
    json_data = response.json()
    print(json.dumps(json_data, indent=4, ensure_ascii=False))
except ValueError as e:
    print("Respuesta no es JSON válido:")
    print(response.text)