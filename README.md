# Platform Bieb in Bloei sprint 2
Tijdens sprint 2 heb ik me gericht op de verdere ontwikkeling van de geveltuinpagina. Daarbij lag mijn focus op het toegankelijk maken van de pagina voor elke gebruiker, met speciale aandacht voor gebruikers die blind zijn of een screenreader gebruiken om websites te navigeren. Hierbij heb ik verschillende technieken toegepast, zoals het verbeteren van de HTML-structuur, het toevoegen van beschrijvende alt-teksten en het optimaliseren van de navigatie voor screenreaders. Op deze manier wil ik ervoor zorgen dat de pagina voor iedereen toegankelijk en gebruiksvriendelijk is.

#### Wie is Bieb in Bloei?
Bieb in Bloei is onderdeel van Buurtcampus Oost. Dit is een sociale groene ontmoetingsplek waar plantenliefhebbers bij elkaar komen om actief deel te nemen aan vergroening van de omgeving van Amsterdam. Bieb in Bloei biedt verschillende diensten aan waaronder: Zaden- en stekjesbibliotheek, groene educatieve workshops over duurzaamheid, tuinieren en vergroening en geveltuin project waaarin je van alles leert over duurzaamheid, verzorging van stekjes en zaadjes.

#### Vraag opdrachtgever
De opdrachtgever heeft de volgende vraag aan mij opgesteld: Ontwerp en ontwikkel een digitaal platform voor Bieb in Bloei van Buurtcampus Oost, waarbij Harry op een creatieve manier naar voren komt.

Linkje naar de ontwikkelde Geveltuin pagina: [www.ambersr.github.io/all-human-accessible-website/](https://ambersr.github.io/all-human-accessible-website/)

## Inhoudsopgave Readme

  * [Beschrijving](#beschrijving)
  * [Kenmerken](#kenmerken)
  * [Bronnen](#bronnen)

## Beschrijving
### Het ontwerp
Het ontwerp is grotendeels hetzelfde gebleven. De enige aanpassing die ik heb doorgevoerd zijn de kleuren van de knoppen. Aan de hand van een toegankelijkheidstest heb ik ontdekt dat het contrast tussen de achtergrondskleur en de tekstkleur van de knoppen onvoldoende was. Dit contrast is belangrijk omdat de knop enerzijds goed moet opvallen voor SEO-doeleinden en anderzijds leesbaar moet zijn voor gebruikers met visuele beperkingen en voor degenen die screenreaders gebruiken. Om aan beide eisen te voldoen, heb ik de knoppen iets donkerder gemaakt. Zo blijven ze opvallend, terwijl gebruikers met een visuele beperking ze nu beter kunnen lezen.

- Knop kleur verandering

<img width="600" alt="image" src="https://github.com/user-attachments/assets/ec067554-d7c8-4c25-942d-c1fb23e99437">

### Het ontwikkelde platform
Gebruikers met een beperking kunnen nu met de tab-toets eenvoudig door de website navigeren. Daarnaast heb ik een skiplink toegevoegd, zodat gebruikers die een screenreader gebruiken de navigatie kunnen overslaan en direct naar de hoofdinhoud kunnen gaan.

### Belangrijke features:
- Skiplink (voor toegankelijkheid)

Doormiddel van een skiplink kan een gebruiker met een een screenreader de navigatie items overslaan. Op deze manier hoeft een gebruiker die gebruik maakt van de tab functie niet de hele navigatie te doorlopen op een pagina.

<img width="199" alt="image" src="https://github.com/user-attachments/assets/293be090-7a62-4db2-8c0f-6e66fb24a6ae">

- Animatie Harry

Harry komt te voorschijn en zwaait naar de bezoeker! Voor in het vervolg wil ik nog niets toevoegen van een pop up waarbij Harry kort iets uitlegt over de geveltuin.

<img width="300" alt="image" src="https://github.com/user-attachments/assets/67caa593-7718-45e7-a213-7a9325f74fb5">

## Kenmerken
### Toegankelijkheid HTML
De HTML heeft een paar veranderingen. De accordion bestaat nu uit een detail en summary. Dit zorgt ervoor dat de code nog meer semantisch is opgebouwd. Ook heb ik een aantal aria-labels toegevoegd, dit zorgt voor een betere toegankelijkheid van de pagina.

### Belangrijke aspecten in CSS
Wat belangrijk is om te weten is dat de code mobile first geschreven is. De media queries zijn genest in de de elementen, op deze manier kan je gemakkelijk responsive kwesties aanpassen in het juiste element en is de code makkelijker leesbaar. 

### Belangrijke aspecten Javascript
De Javascript wordt gebruikt om de animaties op de pagina toe te voegen. Het gaat dan voornamelijk om de volgende elementen: Hamburger menu, het verbergen van het menu wanneer je scrollt en accordion waarin belangrijke informatie staat m.b.t de Geveltuin

## Bronnen
- Huisstijl (kleuren en fonts uit de website gehaald) Linkje: https://bieb-in-bloei.vercel.app/
- Figma bestand (design Geveltuin pagina) Linkje: https://www.figma.com/design/DXJVOUapnTVZWHXkFpcr0I/FDND-projecten?node-id=62-2304&t=5PNDDUMVCjG4DIYr-1
