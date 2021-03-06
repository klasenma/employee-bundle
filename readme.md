# Eigenes Contao-Bundle
## Installation 

* In der root ``composer.json`` folgenden Code einfügen:
 
```javascript
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/klasenma/employee-bundle"
        }
    ]
``` 
* außerdem unter ``require`` folgendes ergänzen: 

```javascript
"require": {
...
"klasenma/employee-bundle": "@dev"
},
```

* anschließend den Contao-Ordner über ``composer update`` aktualisieren.


## Datenbank aktualisieren

* Über meinedomain/contao/install ins Contao-Installtool wechseln und die Tabelle ``employee`` erstellen:

![aktualisieren](/img/db_aktualisieren.jpg)

## Backend-Einstellungen vornehemem

* über meinedomain/contao Backend betreten
	* inzwischen sollte das Erweiterungsmodul erschienen sein 
* unter ''Inhalte'' neuen Mitarbeiter hinzufügen
* neues Modul anlegen (Modultyp = ''Mitarbeiterübersicht'')
* neues Modul in der Seitenstruktur einem Layout zuordnen 
	* ggfls. neue Seite anlegen

### Erstellt im Rahmen der Veranstaltung ''Content Management Systeme'' WS18/19 der Hochschule Trier
