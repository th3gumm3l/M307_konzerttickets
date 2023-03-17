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
