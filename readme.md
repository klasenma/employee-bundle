# Eigenes Contao-Bundle
## Installation 

In der root ``composer.json`` folgenden Code einfügen:
 
```javascript
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/klasenma/employee-bundle"
        }
    ]
``` 
außerdem unter ``require`` folgendes ergänzen: 

```javascript
"require": {
...
"klasenma/employee-bundle": "@dev"
},
```

anschließend den Contao-Ordner über ``composer update`` aktualisieren.


## Datenbank aktualisieren

Über meinedomäne/contao/install ins Contao-Installtool wechseln und die Tabelle ``employee`` erstellen:

![aktualisieren](/img/db_aktualisieren.jpg)
