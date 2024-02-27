# Teorija

- **Kas ir API?**
  API ir Application Programming Interface, kas nodrošina veidu, kā dažādām programmām mijiedarboties un apmainīties ar datiem un funkcionalitāti.

- **Kā deklarēt mainīgo PHP valodā?**
  $mainigais = vertiba;

- **Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:**
  Laravel izmanto MVC (Model-View-Controller) arhitektūru. Modelis (Model) atbild par datu pārvaldību, Skats (View) atbild par datu attēlošanu un Kontrolieris (Controller) atbild par funkcionalitāti.

- **Kas ir ORM, kāpēc to izmanto tīra SQL vietā?**
  ORM ir Object-Relational Mapping, kas ļauj programmētājiem strādāt ar datu bāzēs izmantojot objektus, nevis tieši rakstot SQL pieprasijumiem.

- **Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4.**
$users = User::where('rating', '>', 4)->get();
