# get_token.py
import requests
import json

def get_jwt_token(login_url, username, password):
    """
    Makes a POST request to the login API to get a JWT token.

    Args:
        login_url (str): The URL of the login API endpoint.
        username (str): The username for authentication.
        password (str): The password for authentication.

    Returns:
        str or None: The JWT token if the login is successful, otherwise None.
    """
    headers = {
        'Content-Type': 'application/json'
    }
    login_data = {
        "usuario": username,
        "password": password
    }

    try:
        response = requests.post(login_url, headers=headers, json=login_data)
        response.raise_for_status() # Raise an exception for HTTP errors (4xx or 5xx)
        
        response_json = response.json()
        
        if response_json.get('estado') and 'token' in response_json:
            print("Token successfully obtained.")
            return response_json['token']
        else:
            print("Login failed. Check username and password.")
            return None

    except requests.exceptions.RequestException as e:
        print(f"An error occurred while connecting to the login API: {e}")
        return None
    except json.JSONDecodeError:
        print("Received non-JSON response from login API.")
        print(response.text)
        return None

if __name__ == "__main__":
    # Example usage:
    LOGIN_URL = 'http://localhost/PHP/base_login_crud/mydocu/Vista/api/api_login.php'
    USERNAME = 'ADM'
    PASSWORD = 'Bogota123'
    
    token = get_jwt_token(LOGIN_URL, USERNAME, PASSWORD)
    if token:
        print(f"Your token is: {token}")
    else:
        print("Could not retrieve a token.")