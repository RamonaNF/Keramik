#include <ESP8266WebServer.h>
#include <ESP8266WiFi.h>
#include "DHT.h"
#include <string.h> // Librerias estándares de c++
#include <sstream>

#define DHTPIN 0 // GPIO0 (D3) -> PIN DEL SENSOR
#define DHTTYPE DHT11 // Tipo de sensor

int ledWiFi = 16; // GPIO16 (D0) -> LED CONEXIÓN A INTERNET
int ledServer = 5; // GPIO5 (D1) -> LED CONEXIÓN A LA PÁGINA WEB

const char *ssid =  ""; // Nombre de la red WiFi
const char *password =  ""; // Contraseña

ESP8266WebServer server(80);
DHT dht(DHTPIN, DHTTYPE);

void setup() {
  Serial.begin(115200);
  delay(10);
  
  Serial.println("\n\n----------------------------------- SETUP -----------------------------------");
  
  pinMode(ledWiFi, OUTPUT);
  digitalWrite(ledWiFi, LOW);
  pinMode(ledServer, OUTPUT);
  digitalWrite(ledServer, LOW);

  setWiFi();

  server.on("/", handleOnConnect);
  server.onNotFound(handleNotFound);
  server.begin();
  Serial.println("Server started");
  
  Serial.print("Use this URL to connect: ");
  Serial.print("http://");
  Serial.print(WiFi.localIP());
  Serial.println("/");
  
  dht.begin();
  Serial.println("Sensor connected");
  Serial.println("\n--------------------- Humidity and temperature readings ---------------------");
  
  delay(1000);
}
 
void loop() {
  digitalWrite(ledServer, LOW);
  server.handleClient();
  
  if (WiFi.status() != WL_CONNECTED) {
    Serial.println("\nWiFi disconnected");
    digitalWrite(ledWiFi, LOW);
    setWiFi();
  }
  
  delay(2000);
}

void setWiFi() {
  Serial.print("\nConnecting to ");
  Serial.println(ssid);
   
  WiFi.begin(ssid, password);
   
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  
  Serial.println("\nWiFi connected");
  digitalWrite(ledWiFi, HIGH);
}

void handleOnConnect() {
  digitalWrite(ledServer, HIGH);
  
  float h = dht.readHumidity();
  float t = dht.readTemperature();

  if(isnan(h)||isnan(t)){
    Serial.println("\nSensor readings couldn't be retrieved");
    return;
  }

  Serial.print("\nHumedad: ");
  Serial.print(h);
  Serial.println("%");
  Serial.print("Temperatura: ");
  Serial.print(t);
  Serial.println("°C");
  
  if(isnan(t)||isnan(h)){
    server.send(200, "text/html", SendData(0,0));
  }else{
    server.send(200, "text/html", SendData(t,h));  
  }
}

void handleNotFound(){
  Serial.println("\nServer disconnected\n");
  digitalWrite(ledServer, LOW);
  server.send(404, "text/plain", "Not found");
}

String SendData(float temperature,float humidity){
  // Concatenar los valores con sus llaves para poder accesarlas en formato JSON
  std::stringstream ptr; 
  ptr << "{\"temperatura\":\"" << (float)temperature << "\", \"humedad\":\"" << (float)humidity << "\"}";
  
  // Retornamos un string normal de c que tiene una conversion implícita al string de arduino
  //Serial.println(ptr.str().c_str());
  //Serial.println();
  return ptr.str().c_str();
}
