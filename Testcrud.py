import requests
import json
import urllib.parse

# URL base de tu API
URL_API = 'http://localhost:8080/mydocu/Vista/api/api_usuarios.php'

# Tu token JWT. Asegúrate de que no haya espacios en blanco extra.
TOKEN_JWT = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyIjoiQURNIiwibmFtZSI6IkdlbmVyaWNvIiwiaWQiOjEsInJvbCI6IjEsMiIsImlhdCI6MTc1NjIxMjI3NSwiZXhwIjoxNzU2MjE1ODc1fQ.QBvoDzg-BflxMSPVx2ZcoxEkX_4UWwGqo91AIDcQcPc'

# Headers estándar para las solicitudes
HEADERS_JSON = {
    'Content-Type': 'application/json',
    'Authorization': f'Bearer {TOKEN_JWT}'  # Aquí se agrega el token
}

HEADERS_URLENCODED = {
    'Content-Type': 'application/x-www-form-urlencoded',
    'Authorization': f'Bearer {TOKEN_JWT}' # También para los métodos PUT y DELETE
}

def ejecutar_solicitud(metodo, url, data=None, headers=HEADERS_JSON):
    """
    Función de utilidad para ejecutar solicitudes HTTP y manejar errores de forma centralizada.
    
    Args:
        metodo (str): El método HTTP ('GET', 'POST', 'PUT', 'DELETE').
        url (str): La URL del endpoint.
        data (dict, optional): Datos a enviar en la solicitud.
        headers (dict, optional): Encabezados de la solicitud.
    """
    print(f"--- Probando {metodo.upper()}: {url} ---")
    try:
        response = requests.request(metodo, url, headers=headers, json=data if headers['Content-Type'] == 'application/json' else None, data=data if headers['Content-Type'] == 'application/x-www-form-urlencoded' else None)
        response.raise_for_status()

        # Intenta decodificar la respuesta JSON si no está vacía
        try:
            json_data = response.json()
            print("Respuesta del servidor:")
            print(json.dumps(json_data, indent=4, ensure_ascii=False))
        except json.JSONDecodeError:
            print("Respuesta no es JSON válido:")
            print(response.text)

    except requests.exceptions.HTTPError as e:
        print(f"Error HTTP: {e.response.status_code} - {e.response.reason}")
        print("Respuesta del servidor:")
        print(e.response.text)
    except requests.exceptions.RequestException as e:
        print(f"Error de conexión: {e}")
    print("-" * 50)


# --- FUNCIONES DE PRUEBA ORGANIZADAS ---
def probar_obtener_usuarios():
    """Prueba el método GET para obtener todos los usuarios."""
    ejecutar_solicitud('GET', URL_API)

def probar_crear_usuario():
    """Prueba el método POST para crear un nuevo usuario."""
    nuevo_usuario = {
        "usuario": "mortaldos",
        "nombres": "Armando Casas",
        "password": "111",
        "perfil": "1",
        "roles": ["1", "2"]
    }
    ejecutar_solicitud('POST', URL_API, data=nuevo_usuario, headers=HEADERS_JSON)

def probar_actualizar_usuario(id_usuario):
 
    """Prueba el método PUT para actualizar un usuario."""
    datos_actualizar = {
        "id": id_usuario,  # <- CORREGIDO
        "nombres": "Nombre Actualizado",
        "perfil": "2",
        "roles": ["1"],
        "estado": 0
    }
    ejecutar_solicitud('PUT', URL_API, data=datos_actualizar, headers=HEADERS_JSON)


def probar_eliminar_usuario(id_usuario):
    """Prueba el método DELETE para eliminar un usuario."""
    datos_eliminar = {
        "id": id_usuario
    }
    ejecutar_solicitud('DELETE', URL_API, data=datos_eliminar, headers=HEADERS_URLENCODED)


# --- EJECUCIÓN DEL SCRIPT ---
if __name__ == "__main__":
    print("Iniciando pruebas de la API de usuarios.")
    print("Si tu API tiene middleware de autenticación, las solicitudes POST, PUT y DELETE fallarán sin un token JWT válido.")

    # 1. Prueba de la funcionalidad GET
    #probar_obtener_usuarios()
    
    # 2. Prueba de la funcionalidad POST
    #probar_crear_usuario()
    
    # Asume que el ID del usuario a probar es 2.
    # Asegúrate de que este ID exista en tu base de datos.
    id_para_probar = 6

    # 3. Prueba de la funcionalidad PUT
    probar_actualizar_usuario(id_para_probar)
    
    # 4. Prueba de la funcionalidad DELETE
    #probar_eliminar_usuario(id_para_probar)