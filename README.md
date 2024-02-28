# PD_laravel
TEORIJA
- Kas ir API?
  API vai "Aplication Programming Interface" ir sistēmas veids, kur divas vai vairāk programmēšanas vienības var mijiedarboties starp sevi. Tas palīdz izveidot jaunu lietojumprogrammu ar funkcijam no citam programmam. 
- Kā deklarēt mainīgo PHP valodā?
  Deklarēt PHP vajag norādot nosaukumu un piešķirt vērtību, piemers "$mainīgais= 'vērtība'".
- Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
  Laravel izmanto piemēram MVC(Model-View-Controller) arhitektūru.
  Modelis- šeit ir dati un notiek apstrāde. Modelis strada ar datu bāzes darbībam, piemēram datu saglabāšana, iegūšana, dzēšana un c.
  Skats-šeit ir lietotāja saskarsne, kas radas lietotājam. Parasti tas ir HTML, kas var strādāt ar PHP kodu.
  Kontrolieris - aplikāciju darbība. Kontrolieris saņem pieprasījumu par maršrutu un teic kā darbību javeic. tas atbild par datiem, kas tiek paradīti, ja vajag vel pieprasījuma apstrādi, lai nosutīt datus.
- Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
  ORM(Object-Relational Mapping) - ir ir programmēšanas tehnika, kas ļauj attēlot datu bāzes ierakstus programmēsanas vaolidas vidē.
  ORM izmanto tīra veidā SQL vietā jo tas piedavā augstāk abstrakcijas datu bāzes darbībam. programmētaji var strādāt ar datu bāzem izmantojot objekta orientēto pieeju  neuztraucojoties par par SQL vaicājumiem.
- Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra.
  use APP\Models\User;
  $users = User::where('rating','>', 4)->get();

  PRAKTIKA
  
