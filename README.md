# M307 Konzerttickets

>Group Tim and Yannic

## Sitemap
### Hauptseite (Form-View)
- /form
- Der Mitarbeiter soll mit dem Formular die bestehenden Tickets in die Datenbank eintragen können, über das Webformular.
### Kaufseite (Liste der getätigten Einkäufe)
- /list
- Soll für den Mitarbeiter alle gekauften Tickets und ihre Informationen anzeigen, welche dann auch noch vom Mitarbeiter mutiert werden können.
### Kauf hinzufügen / erstellen
- /validateInputForm
- Soll die Funktion im Kontroller sein, um den Eintrag in die Datenbank zu machen. Button  «Erfassen»
### Kauf löschen
- /edit
- Soll die Funktion im Kontroller sein, um den Eintrag in der Datenbank zu löschen.
### Kauf mutieren
- /edit
- Soll die Funktion im Kontroller sein, um den Eintrag von der Webseite in der Datenbank zu bearbeiten.
### Übersicht erstellen
- /form
- Soll die Funktion im Kontroller sein, um den Überblick mit den Rabatten für den Preis darzustellen
### Zahlung bestätigen
- /edit
- Soll die Funktion im Kontroller sein, um die ausgewählten Käufe auf der Kaufseite, als bezahlt zu vermerken und sie auszublenden, jedoch nicht aus der Datenbank entfernen.

## Validierung-Formular
### Name
- Keine Sonderzeichen
- Keine Zahlen
- trim()
### E-Mail
- Enthält ein “@“ und danach ein “. “, korrekte E-Mail-Struktur
- trim()
### Nummer
- Besteht nur aus Nummern, Leerzeichen und folgenden Symbolen: + / - ) (
- trim()
### Alter
- Mindestens 14 Jahre, maximal 99 Jahre
### Konzert
- Eingabe stimmt mit den Vorgaben überein.

## Datenbank
### User Tabelle:
-	ID (Auto_Increment, Int, Primary Key)
-	Name (Varchar (255))
-	Prename (Varchar (255))
-	E-Mail (Varchar (255))
-	Phone (Varchar (255), Can be Null)
#### Kauf Tabelle:
-	ID (Auto_Increment, Int, Primary Key)
-	Artist ID (Int, FK)
-	Zahlungsstatus (Boolean)
-	Kaufdatum (Date)
-	User ID (Int, FK)
-	Overdue (Boolean)
### Konzerte Tabelle:
-	ID (Auto_Increment, Int, Primary Key)
-	Artist (Varchar (255), NOT NULL)

## Testfälle

1.	
GEGEBEN SEI &emsp; Ich bin auf der Form-Seite <br>
WENN &emsp; Ich die Informationen eingegeben habe und dann die Übersicht erstellen lasse <br>
DANN &emsp; Dann sehe ich die genaue Frist, mit oder ohne Treuebonus <br>
STATUS &emsp; Erfüllt <br>

2.	
GEGEBEN SEI &emsp; Ich bin auf der Form-Seite <br>
WENN &emsp; Ich den «Verwerfen» Button drücke <br>
DANN &emsp; werden die Eingabefelder geleert und das Formular nicht abgeschickt <br>
STATUS &emsp; Erfüllt <br>

3.	
GEGEBEN SEI &emsp; Ich bin auf der Form-Seite <br>
WENN &emsp; Ich den «Erfassen» Button drücke <br>
DANN &emsp; wird das Formular, sofern es korrekt ausgefüllt ist, abgeschickt und in die Datenbank eingetragen <br> 
STATUS &emsp; Nicht erfüllt <br>

4.	
GEGEBEN SEI &emsp; Ich bin auf der Form-Seite <br>
WENN &emsp; Ich den Künstler beim Eingabefeld «Artist» eingebe und mir die Übersicht erstellen lasse <br>
DANN &emsp; wird mir die Korrektheit des Künstlers mit den Konzerten in der Datenbank überdprüft, ob es überhaupt eines für den genannten Künstler gibt <br>
STATUS &emsp; Erfüllt <br>

5.
GEGEBEN SEI &emsp; Ich bin auf der Kauf-Seite <br>
WENN &emsp; Ich zuoberst auf der Seite bin <br>
DANN &emsp; wird mir der neuste Kauf zuoberst angezeigt <br>
STATUS &emsp; Erfüllt <br>

6.	
GEGEBEN SEI &emsp; Ich bin auf der Kauf-Seite <br>
WENN &emsp; Ich auf den «Bearbeiten» Text drücke <br>
DANN &emsp; kann ich die Elemente im Browser bearbeiten, welche laut Vorgabe auch mutierbar sein sollen <br>
STATUS &emsp; Erfüllt <br>

7.
GEGEBEN SEI &emsp; Ich bin auf der Kauf-Seite <br>
WENN &emsp; Ich auf den «Löschen» Text drücke <br>
DANN &emsp; wird mir dieser Kaufeintrag gelöscht <br>
STATUS &emsp; Nicht erfüllt <br>

8.
GEGEBEN SEI &emsp; Ich bin auf der Kauf-Seite <br>
WENN &emsp; Ich die Ticket-Käufe ansehe <br>
DANN &emsp; wird ersichtlich, ob der Kauf schon bezahlt ist oder noch nicht. Zusätzlich wird mir die Frist angezeigt <br>
STATUS &emsp; Erfüllt <br>

9.
GEGEBEN SEI &emsp; Ich bin auf der Kauf-Seite <br>
WENN &emsp; Ich schon bezahlte Käufe abhaken will <br>
DANN &emsp; kann ich mehrere Käufe auswählen und über einen Button bestätigen, dass jene bezahlt, wurden <br> 
STATUS &emsp; Nicht erfüllt <br>

10.	
GEGEBEN SEI &emsp; Ich bin auf der Kauf-Seite <br>
WENN &emsp; Ich die Käufe bestätigt habe <br>
DANN &emsp; werden diese nicht aus der Datenbank gelöst, nur nicht angezeigt <br>
STATUS &emsp; Nicht erfüllt <br>

## Roadmap
### Donnerstag
#### Erledigt / Status?
- Konzeptionierung für Projekt gemacht und abgegeben
- GitHub Repository erstellt
&emsp; Öffentlich gemacht
&emsp; Gruppenmitglied hinzugefügt
- Dokumentationsdatei erstellt und mit Gruppenpartner geteilt
#### Tagesziele
- MVC Prinzip (Framework.zip) anwenden und Ordnerstruktur erstellen
- Lokale Datenbank über PhpMyAdmin erstellen
- Datenbank mit Preisen ergänzen und die Kauf-Tabelle ergänzen
- Views für oben genannte Sitemaps erstellen
- Router kann auf Kontroller zugreifen und verarbeitet das erwünschte
- Eventuell JavaScript Funktionen schreiben
- Meeting vereinbaren mit Kursleiter

### Freitag
#### Erledigt / Status?
- Zwischenstand präsentiert
- MVC Konzept mit Ordnerstrukturen aufgebaut und bereits Views erstellt
- Router leitet korrekt weiter
- Datenbank eingerichtet
- Kontroller verarbeitet schon einzelne Funktionen
#### Tagesziele
- Kontroller vervollständigen
- Dokumentation komplementieren
- Testfälle prüfen
- Projekt abschliessen, allenfalls überarbeiten
- Präsentation vorbereiten und halten
