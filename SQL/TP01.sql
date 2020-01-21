/===================================================================/
/ TP01 - Création d une base de donnée sur la location de véhicule. /
/===================================================================/

          -> V.L              -> Privés
Location           -> clients
          -> P.L              -> Pros

- Prix / jour
- Durée de location

 - MCD :

___________
  CLIENT
___________
idClient
prenomClient
nomClient
typeClient

1/n

LOCATION - dureeLocation (heure)

0/n

___________
  VEHICULE
___________
idVehicule
typeVehicule
nomVehicule
prixVehicule
