#include <ESP8266WiFi.h>
#include <Wire.h> 
#include <LiquidCrystal_I2C.h>
#include "DHT.h"  
#define DESLIGADO 0
#define LIGADO 1
#ifndef STASSID
#define STASSID "LIVE TIM_5547_2G"
#define STAPSK  "10182126"
#endif

const char* ssid     = STASSID;
const char* password = STAPSK;

const char* host = "192.168.1.3";
const uint16_t port = 80; 

const int pino_dht = 14 ; // pino onde o sensor DHT está conectado
float temperatura; // variável para armazenar o valor de temperatura
float umidade; // variável para armazenar o valor de umidade

int estado;

const int pinoSensor = A0; 
const int pinoRele = 0;
const int limiarSeco = 60;
const int tempoRega = 5;// Tempo de rega em segundos

int umidadeSolo = 0;

HTTPClient http;

DHT dht(pino_dht, DHT11); // define o pino e o tipo de DHT
LiquidCrystal_I2C lcd(0x27,16,2);

void setup() {
  
  pinMode(pinoRele, OUTPUT); //Inicializa o Rele
  dht.begin(); //Inicializa o sensor DHT
  Serial.begin(9600);   
  lcd.init();   //Inicializa o LCD
  lcd.backlight(); //Habilita a luz de fundo do LCD
  lcd.setCursor(0, 0); //Seta a posição em que o cursor inicializa (Linha1)
  lcd.print("    LukinMar    ");
  lcd.setCursor(0, 1);
  lcd.print("    Solutions   ");
  delay(2000);
  lcd.clear();
  lcd.setCursor(0, 0);
  lcd.print("     Sistema    "); //Escreve o texto na primeira linha do display LCD
  lcd.setCursor(0, 1); //Seta a posição em que o cursos recebe o texto a ser mostrado (Linha2)   
  lcd.print("    Irrigacao   "); //Escreve o texto na segunda linha do display LCD
  delay(2000);
  lcd.clear();
  lcd.setCursor(0,0);
  lcd.print(" Conectando... ");
  delay(2000);
  lcd.clear();
  lcd.setCursor(0,0);
  lcd.print("      Wifi     ");
  lcd.setCursor(0,1);
  lcd.print("    conectado   ");
  delay(2000);


  // We start by connecting to a WiFi network

  Serial.println();
  Serial.println();
  Serial.print("Conectando com ");
  Serial.println(ssid);
  

  /* Explicitly set the ESP8266 to be a WiFi-client, otherwise, it by default,
     would try to act as both a client and an access-point and could cause
     network-issues with your other WiFi-devices on your WiFi-network. */
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, password);

  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.println("WiFi conectado");
  Serial.println("Endereco IP: ");
  Serial.println(WiFi.localIP());
  
}

void loop() {

  
    /*******************************************************
   **************** CONEXAO E ENVIO****** *****************
   *******************************************************/
   
  Serial.print("Conectando a: ");
  Serial.print(host);
  Serial.print(':');
  Serial.println(port);

  // Use WiFiClient class to create TCP connections
  WiFiClient client;
  if (!client.connect(host, port)) {
    Serial.println("Falha na conexão");
    lcd.clear();
    lcd.setCursor(0,0);
    lcd.print("Falha na conexão");
    delay(5000);
    return;
  }

    telaEspera();
  
  delay(40000);
  temperatura = dht.readTemperature(); // Lê a temperatura em Celsius
  umidade = dht.readHumidity(); // Lê a umidade
  umidadeSolo = analogRead(pinoSensor);// Lê a umidade do solo
  umidadeSolo = map(umidadeSolo, 1023, 0, 0, 100); // Converte a variação do sensor de 0 a 1023 para 0 a 100

  /* PROVISÓRIO  
// Se ocorreu alguma falha durante a leitura
  if (isnan(umidade) || isnan(temperatura)) {
    lcd.print("Falha");
  }

  else { // Se não  /*/
    // Imprime o valor de temperatura  
    lcd.clear();
    lcd.print("Temp:");
    lcd.print(temperatura);
    lcd.setCursor(7,0);
    lcd.print((char)223); // simbolo grau quadrado
    lcd.setCursor(8,0);
    // Imprime o valor de umidade
    lcd.print(" UR:");
    lcd.print(umidade);
    lcd.setCursor(14,0);
    lcd.print("%  ");
    
    Serial.print("Temperatura: ");
    Serial.print(temperatura);
    Serial.print(" UR: ");
    Serial.println(umidade);
    Serial.print("Umidade do solo: ");
    Serial.println(umidadeSolo);
    
    lcd.setCursor(0,1);
    lcd.print("UmidadeSolo: ");
    lcd.print(umidadeSolo);
    lcd.print("%  ");
  //}
  
    //Rega automática
  if(umidadeSolo < limiarSeco) {
     if (estado == DESLIGADO) {
      estado = LIGADO;
      digitalWrite (pinoRele, HIGH);
      lcd.clear();
      lcd.setCursor(0, 0);
      lcd.print("   Irrigando   ");
      Serial.println("   Irrigando   "); 
      delay(tempoRega*1000);    // Espera o tempo estipulado
      digitalWrite(pinoRele, LOW);
      estado = DESLIGADO;
      lcd.clear();
    }
   }

   telaEspera();

   //Rega manual
    srv:listen(80, function(conn))
    conn:on("receive",function(client,payload)
    Serial.print(payload);

        // Verifica se a requisição recebida contém a expressão "botao=Ativar"
        if string.match(payload, "botao=Ativar") {
            if (estado == DESLIGADO) {
            estado = LIGADO;
            digitalWrite (pinoRele, HIGH);
            lcd.clear();
            lcd.setCursor(0, 0);
            lcd.print("   Irrigando   "); 
            Serial.println("   Irrigando   m");
            delay(tempoRega*1000);    // Espera o tempo estipulado
            digitalWrite(pinoRele, LOW);
            estado = DESLIGADO;
            lcd.clear();
    }
        }
        
  lcd.home(); // Seta o cursor para o inicio caracter 0, na linha 0
  delay(100);

   String url = "/sistemairrigacao/salvar.php?";
         url += "temp=";
         url += temperatura;
         url +="&ur=";
         url += umidade;
         url +="&us=";
         url +=umidadeSolo;

 Serial.print("Requisitando URL:");
 Serial.println(url);
  
  Serial.println("Enviando dados para o servidor");
  if (client.connected()) {
    Serial.println("hello from ESP8266");
  }
  
 client.print (String("GET ") + url + " HTTP/1.1\r\n" +
                "Host:   " + host + "\r\n" + 
                "Connection: close\r\n\r\n");


  // wait for data to be available
  unsigned long timeout = millis();
  while (client.available() == 0) {
    if (millis() - timeout > 5000) {
      Serial.println(">>> Client Timeout !");
      client.stop();
      delay(60000);
      return;
    }
  }

  // Read all the lines of the reply from server and print them to Serial
  Serial.println("Recebendo dados do servidor");
  // not testing 'client.connected()' since we do not need to send data here
  while (client.available()) {
    String ch = client.readStringUntil('\r');
   // Serial.print(ch);
    if (ch.indexOf("Salvo com sucesso") != -1){
      Serial.println();
      Serial.println("Salvo com sucesso");
    }
  }
  // Close the connection
  Serial.println();
  Serial.println("Conexao fechada");
  client.stop();

  delay(10000); //
}

void telaEspera(){
  
    lcd.clear();
    lcd.print("Temp:");
    lcd.print(temperatura);
    lcd.setCursor(7,0);
    lcd.print((char)223); // simbolo grau quadrado
    lcd.setCursor(8,0);
    // Imprime o valor de umidade
    lcd.print(" UR:");
    lcd.print(umidade);
    lcd.setCursor(14,0);
    lcd.print("%  ");
    lcd.setCursor(0,1);
    lcd.print("UmidadeSolo: ");
    lcd.print(umidadeSolo);
    lcd.print("%  ");
}
