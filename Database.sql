CREATE TABLE IF NOT EXISTS `Resource` (
	`ID`	TEXT,
	`TXT`	TEXT,
	`IMG`	TEXT
);
INSERT INTO `Resource` VALUES ('','','');
INSERT INTO `Resource` VALUES ('M001','M001','M001');
INSERT INTO `Resource` VALUES ('M002','M002','M002');
INSERT INTO `Resource` VALUES ('M003','M003','M003');
INSERT INTO `Resource` VALUES ('M004','M004','M004');
INSERT INTO `Resource` VALUES ('M005','M005','M005');
INSERT INTO `Resource` VALUES ('M006','M006','M006');
INSERT INTO `Resource` VALUES ('M007','M007','M007');
INSERT INTO `Resource` VALUES ('M008','M008','M008');
INSERT INTO `Resource` VALUES ('M009','M009','M009');
INSERT INTO `Resource` VALUES ('M010','M010','M010');
INSERT INTO `Resource` VALUES ('M011','M011','M011');
INSERT INTO `Resource` VALUES ('M012','M012','M012');
INSERT INTO `Resource` VALUES ('M013','M013','M013');
INSERT INTO `Resource` VALUES ('M014','M014','M014');
INSERT INTO `Resource` VALUES ('A01','A01','A01');
INSERT INTO `Resource` VALUES ('A02','A02','A02');
INSERT INTO `Resource` VALUES ('A03','A03','A03');
INSERT INTO `Resource` VALUES ('A04','A04','A04');
INSERT INTO `Resource` VALUES ('T001','T001','T001');
INSERT INTO `Resource` VALUES ('T002','T002','T002');
INSERT INTO `Resource` VALUES ('T003','T003','T003');
INSERT INTO `Resource` VALUES ('T004','T004','T004');
INSERT INTO `Resource` VALUES ('T005','T005','T005');
INSERT INTO `Resource` VALUES ('T006','T006','T006');
INSERT INTO `Resource` VALUES ('T007','T007','T007');
INSERT INTO `Resource` VALUES ('E001','E001','E001');
INSERT INTO `Resource` VALUES ('E002','E002','E002');
INSERT INTO `Resource` VALUES ('E003','E003','E003');
INSERT INTO `Resource` VALUES ('E004','E004','E004');
INSERT INTO `Resource` VALUES ('E005','E005','E005');
INSERT INTO `Resource` VALUES ('E006','E006','E006');
INSERT INTO `Resource` VALUES ('E007','E007','E007');
INSERT INTO `Resource` VALUES ('E008','E008','E008');
INSERT INTO `Resource` VALUES ('E009','E009','E009');
INSERT INTO `Resource` VALUES ('E010','E010','E010');
INSERT INTO `Resource` VALUES ('E011','E011','E011');
INSERT INTO `Resource` VALUES ('E012','E012','E012');
INSERT INTO `Resource` VALUES ('E013','E013','E013');
INSERT INTO `Resource` VALUES ('EN01','EN01','EN01');
INSERT INTO `Resource` VALUES ('EN02','EN02','EN02');
INSERT INTO `Resource` VALUES ('EN03','EN03','EN03');
INSERT INTO `Resource` VALUES ('EN04','EN04','EN04');
INSERT INTO `Resource` VALUES ('EN05','EN05','EN05');
INSERT INTO `Resource` VALUES ('EN06','EN06','EN06');
INSERT INTO `Resource` VALUES ('EN07','EN07','EN07');
INSERT INTO `Resource` VALUES ('EN08','EN08','EN08');
INSERT INTO `Resource` VALUES ('EN09','EN09','EN09');
INSERT INTO `Resource` VALUES ('EN10','EN10','EN10');
INSERT INTO `Resource` VALUES ('EN11','EN11','EN11');
INSERT INTO `Resource` VALUES ('LU01','LU01','LU01');
INSERT INTO `Resource` VALUES ('LU02','LU02','LU02');
INSERT INTO `Resource` VALUES ('LU03','LU03','LU03');
INSERT INTO `Resource` VALUES ('LU04','LU04','LU04');
INSERT INTO `Resource` VALUES ('LU05','LU05','LU05');
INSERT INTO `Resource` VALUES ('LU06','LU06','LU06');
INSERT INTO `Resource` VALUES ('LU07','LU07','LU07');
INSERT INTO `Resource` VALUES ('LU08','LU08','LU08');
INSERT INTO `Resource` VALUES ('LU09','LU09','LU09');
INSERT INTO `Resource` VALUES ('LU10','LU10','LU10');
INSERT INTO `Resource` VALUES ('LU11','LU11','LU11');
INSERT INTO `Resource` VALUES ('LU12','LU12','LU12');
INSERT INTO `Resource` VALUES ('LU13','LU13','LU13');
INSERT INTO `Resource` VALUES ('LU14','LU14','LU14');
INSERT INTO `Resource` VALUES ('LU15','LU15','LU15');
INSERT INTO `Resource` VALUES ('LU16','LU16','LU16');
INSERT INTO `Resource` VALUES ('LU17','LU17','LU17');
INSERT INTO `Resource` VALUES ('LU18','LU18','LU18');
INSERT INTO `Resource` VALUES ('LU19','LU19','LU19');
INSERT INTO `Resource` VALUES ('LU20','LU20','LU20');
INSERT INTO `Resource` VALUES ('LU21','LU21','LU21');
INSERT INTO `Resource` VALUES ('LU22','LU22','LU22');
INSERT INTO `Resource` VALUES ('LU23','LU23','LU23');
INSERT INTO `Resource` VALUES ('LU24','LU24','LU24');
INSERT INTO `Resource` VALUES ('CA01','CA01','CA01');
INSERT INTO `Resource` VALUES ('CA02','CA02','CA02');
INSERT INTO `Resource` VALUES ('CA03','CA03','CA03');
INSERT INTO `Resource` VALUES ('CA04','CA04','CA04');
INSERT INTO `Resource` VALUES ('CA05','CA05','CA05');
INSERT INTO `Resource` VALUES ('CA06','CA06','CA06');
INSERT INTO `Resource` VALUES ('CA07','CA07','CA07');
INSERT INTO `Resource` VALUES ('CA08','CA08','CA08');
INSERT INTO `Resource` VALUES ('CA09','CA09','CA09');
INSERT INTO `Resource` VALUES ('CA10','CA10','CA10');
INSERT INTO `Resource` VALUES ('CA11','CA11','CA11');
INSERT INTO `Resource` VALUES ('CA12','CA12','CA12');
INSERT INTO `Resource` VALUES ('CA13','CA13','CA13');
INSERT INTO `Resource` VALUES ('CA14','CA14','CA14');
INSERT INTO `Resource` VALUES ('CA15','CA15','CA15');
INSERT INTO `Resource` VALUES ('CA16','CA16','CA16');
INSERT INTO `Resource` VALUES ('CA17','CA17','CA17');
INSERT INTO `Resource` VALUES ('CA18','CA18','CA18');
CREATE TABLE IF NOT EXISTS `Locations` (
	`ID`	TEXT,
	`Locataire`	TEXT,
	`Debut`	TEXT,
	`Fin`	TEXT,
	`Caution`	TEXT,
	`Prix`	TEXT
);
CREATE TABLE IF NOT EXISTS `BaseDeDonnee` (
	`Nom`	TEXT,
	`Marque`	TEXT,
	`Caution`	TEXT,
	`Etat`	TEXT,
	`Quantite`	TEXT,
	`Categorie`	TEXT,
	`Disponible`	TEXT,
	`Prix`	TEXT,
	`Details`	TEXT,
	`ID`	TEXT
);
INSERT INTO `BaseDeDonnee` VALUES ('','','','','','','','','','');
INSERT INTO `BaseDeDonnee` VALUES ('Micro Shure SM58','Shure','110','ok','4','Micro','-','-','','M001');
INSERT INTO `BaseDeDonnee` VALUES ('Micro Shure SM57','Shure','109','ok','2','Micro','-','-','','M002');
INSERT INTO `BaseDeDonnee` VALUES ('Micro Shure Beta 58A','Shure','180','ok','1','Micro','-','-','','M003');
INSERT INTO `BaseDeDonnee` VALUES ('Micro Shure 10A','Shure','-','ok','2','Micro','-','-','','M004');
INSERT INTO `BaseDeDonnee` VALUES ('Micro Shure PG81','Shure','140','ok','1','Micro','-','-','','M005');
INSERT INTO `BaseDeDonnee` VALUES ('Micro Superlux PRA-228A','Superlux','60','ok','2','Micro','-','-','','M006');
INSERT INTO `BaseDeDonnee` VALUES ('Micro Superlux PRA-218A','Superlux','60','ok','1','Micro','-','-','','M007');
INSERT INTO `BaseDeDonnee` VALUES ('Micro Sennheiser md421','Sennheiser','400','ok','1','Micro','-','-','','M008');
INSERT INTO `BaseDeDonnee` VALUES ('Micro Audio Technica MB6K','Audio technica','90','ok','1','Micro','-','-','','M009');
INSERT INTO `BaseDeDonnee` VALUES ('Micro Sennheiser e835','Sennheiser','99','ok','1','Micro','-','-','','M010');
INSERT INTO `BaseDeDonnee` VALUES ('Micro special grosse caisse','-','-','ok','1','Micro','-','-','','M011');
INSERT INTO `BaseDeDonnee` VALUES ('Micro Berhringer Ultravoice','Berhinger','-','ok','2','Micro','-','-','','M012');
INSERT INTO `BaseDeDonnee` VALUES ('Micro AKG D5','AKG','95','ok','1','Micro','-','-','','M013');
INSERT INTO `BaseDeDonnee` VALUES ('Sennheiser UHF Vocal Set fp 35 C EU','Sennheiser','269','-','1','Micro','-','-','','M014');
INSERT INTO `BaseDeDonnee` VALUES ('Ampli QSC Audio RMX 850','QSC','450','ok','4','Ampli','-','-','','A01');
INSERT INTO `BaseDeDonnee` VALUES ('Ampli QSC Audio RMX 1450','QSC','500','ok','3','Ampli','-','-','','A02');
INSERT INTO `BaseDeDonnee` VALUES ('Ampli QSC Audio RMX 2450','QSC','800','ok','1','Ampli','-','-','','A03');
INSERT INTO `BaseDeDonnee` VALUES ('Ampli STA Club 1503','STA','350','ok','1','Ampli','-','-','','A04');
INSERT INTO `BaseDeDonnee` VALUES ('Table de mixage Allen & Heath GL2400','Allen&Heath','','ok','1','Table de mixage','-','-','','T001');
INSERT INTO `BaseDeDonnee` VALUES ('Table Pioneer XDJ-RX + flight case','Pioneer','','ok','1','Table de mixage','-','-','','T002');
INSERT INTO `BaseDeDonnee` VALUES ('Table Pioneer DJM 700','Pioneer','620','ok','1','Table de mixage','-','-','','T003');
INSERT INTO `BaseDeDonnee` VALUES ('Table de mixage Behringer Xenyx X1204 USB','Behringer','130','ok','1','Table de mixage','-','-','','T004');
INSERT INTO `BaseDeDonnee` VALUES ('Table de mixage Behringer DJX700','Berhringer','169','ok','1','Table de mixage','-','-','','T005');
INSERT INTO `BaseDeDonnee` VALUES ('Table de mixage Mackie CFX 16','Mackie','716','ok','1','Table de mixage','-','-','','T006');
INSERT INTO `BaseDeDonnee` VALUES ('Platine Denon SC 2900','Denon','560','ok','2','Table de mixage','-','-','','T007');
INSERT INTO `BaseDeDonnee` VALUES ('Filtre Behringer CX 2300','Behringer','70','ok','1','Effects','-','-','','E001');
INSERT INTO `BaseDeDonnee` VALUES ('Equalizer EQ Crest CPQ 2131P','EQ Crest','300','ok','2','Effects','-','-','','E002');
INSERT INTO `BaseDeDonnee` VALUES ('Equalizer EQ Crest CPQ 2215P','EQ Crest','300','ok','1','Effects','-','-','','E003');
INSERT INTO `BaseDeDonnee` VALUES ('Compresseur + Gate dbx 266XL','DBX','180','ok','3','Effects','-','-','','E004');
INSERT INTO `BaseDeDonnee` VALUES ('Reverb + Delay TC Electronics M350','TC electronics','200','ok','1','Effects','-','-','','E005');
INSERT INTO `BaseDeDonnee` VALUES ('Cordial Multi 24 + Sac de transport','-','480','ok','1','Effects','-','-','','E006');
INSERT INTO `BaseDeDonnee` VALUES ('Line Splitter Palmer PLS 02','Palmer','222','ok','1','Effects','-','-','','E007');
INSERT INTO `BaseDeDonnee` VALUES ('DI stereo Samson S-Direct Plus','Samson','40','ok','3','Effects','-','-','','E008');
INSERT INTO `BaseDeDonnee` VALUES ('DI Box AR116 BSS','-','100','ok','1','Effects','-','-','','E009');
INSERT INTO `BaseDeDonnee` VALUES ('DI Alctron 120','-','39','ok','2','Effects','-','-','','E010');
INSERT INTO `BaseDeDonnee` VALUES ('DI Millenium 66','-','35','ok','1','Effects','-','-','','E011');
INSERT INTO `BaseDeDonnee` VALUES ('Ultra DI Pro Berhringer DI 4000','behringer','90','ok','1','Effects','-','-','','E012');
INSERT INTO `BaseDeDonnee` VALUES ('Millenium sp8 splitter','Millenium','98','ok','1','Effects','-','-','','E013');
INSERT INTO `BaseDeDonnee` VALUES ('Enceintes Yamaha SM121V','Yahama','250','ok','2','Enceintes','-','-','','EN01');
INSERT INTO `BaseDeDonnee` VALUES ('Enceintes EV Sx 300','EV','650','ok','2','Enceintes','-','-','','EN02');
INSERT INTO `BaseDeDonnee` VALUES ('Enceintes D.A.S DS15','DAS','725','ok','2','Enceintes','-','-','','EN03');
INSERT INTO `BaseDeDonnee` VALUES ('Enceintes ALS QG-15','ALS','500','1 ok, 1 HS','2','Enceintes','-','-','','EN04');
INSERT INTO `BaseDeDonnee` VALUES ('Enceintes Sub ALS (500W)','Sub','400','ok','2','Enceintes','-','-','','EN05');
INSERT INTO `BaseDeDonnee` VALUES ('Caissons Atelier 33 /Haut-parleurs Eminence Sigma Pro 18A-2','Eminence','500','ok','4','Enceintes','-','-','','EN06');
INSERT INTO `BaseDeDonnee` VALUES ('Enceintes EV ELX 115','EV','340','ok','2','Enceintes','-','-','','EN07');
INSERT INTO `BaseDeDonnee` VALUES ('Enceinte active Yamaha DXR8','Yamaha','595','ok','1','Enceintes','-','-','','EN08');
INSERT INTO `BaseDeDonnee` VALUES ('Enceintes EV ZLX 12P','','378','ok','2','Enceintes','-','-','','EN09');
INSERT INTO `BaseDeDonnee` VALUES ('Enceinte active Solton MF 300A','Solton','285','ok','1','Enceintes','-','-','','EN10');
INSERT INTO `BaseDeDonnee` VALUES ('Enceinte JBL','JBL','519','ok','2','Enceintes','-','-','','EN11');
INSERT INTO `BaseDeDonnee` VALUES ('Scan ROBE 575 XT','ROBE','-','4 ok / 1 HS','5','Lumieres','-','-','','LU01');
INSERT INTO `BaseDeDonnee` VALUES ('Scan Nicols Pat HID','Nicols','350','ok','3','Lumieres','-','-','','LU02');
INSERT INTO `BaseDeDonnee` VALUES ('Showtec Sunstrip Active DMX','Showtec','290','ok','2','Lumieres','-','-','','LU03');
INSERT INTO `BaseDeDonnee` VALUES ('Botex MPX-405 Dimmer','Botex','140','ok','5','Lumieres','-','-','','LU04');
INSERT INTO `BaseDeDonnee` VALUES ('Strobo Martin Atomic 3000','Martin atomic','700','ok','1','Lumieres','-','-','','LU05');
INSERT INTO `BaseDeDonnee` VALUES ('Lumiere noire Nicols UV panel 363','Nicols','209','ok','1','Lumieres','-','-','','LU06');
INSERT INTO `BaseDeDonnee` VALUES ('G-Tech HighLase 250G','Highlase','790','ok','1','Lumieres','-','-','','LU07');
INSERT INTO `BaseDeDonnee` VALUES ('Antari Z1200 II Fog Machine','Antari','300','ok','1','Lumieres','-','-','','LU08');
INSERT INTO `BaseDeDonnee` VALUES ('PAR (grand)','','50','10 ok, 5 sans lampe, 1 cable alim casse','15','Lumieres','-','-','','LU09');
INSERT INTO `BaseDeDonnee` VALUES ('PAR (petit)','','18.9','2 ok, 4 sans lampe','6','Lumieres','-','-','','LU10');
INSERT INTO `BaseDeDonnee` VALUES ('DTS Scena 300/500 MK2 PC Anti Halo','Scena','117','ok','2','Lumieres','-','-','','LU11');
INSERT INTO `BaseDeDonnee` VALUES ('DTS Scena 650/1000 MK2 PC Anti Halo','Scena','135','1 ok 3 lampe HS','4','Lumieres','-','-','','LU12');
INSERT INTO `BaseDeDonnee` VALUES ('Stairville B5R Beam Moving Head 5R','Stairville','998','ok','2','Lumieres','-','-','','LU13');
INSERT INTO `BaseDeDonnee` VALUES ('Boitier Sunlite suite 2 Basic Class','Sunlite','429','ok','2','Lumieres','-','-','','LU14');
INSERT INTO `BaseDeDonnee` VALUES ('Controleur DMX Starway CHAMAN','Starway','35','?','1','Lumieres','-','-','','LU15');
INSERT INTO `BaseDeDonnee` VALUES ('Controleur DMX Starway CHEYEN','Starway','40','?','1','Lumieres','-','-','','LU16');
INSERT INTO `BaseDeDonnee` VALUES ('Channel dispatching Starway TIWA','Starway','49','?','1','Lumieres','-','-','','LU17');
INSERT INTO `BaseDeDonnee` VALUES ('Channels dimming console Starway CHEYEN','Starway','190','?','1','Lumieres','-','-','','LU18');
INSERT INTO `BaseDeDonnee` VALUES ('Pied de levage (grand) Alu Tech ALT 450','Alu tech','','ok','2','Lumieres','-','-','','LU19');
INSERT INTO `BaseDeDonnee` VALUES ('Pied de levage (petit) Mobil Tech 4aF Mini','Mobil tech','200','ok','2','Lumieres','-','-','','LU20');
INSERT INTO `BaseDeDonnee` VALUES ('Pad AKAI APC 40','AKAI','299','ok','1','Lumieres','-','-','','LU21');
INSERT INTO `BaseDeDonnee` VALUES ('Rail portatif (2m)','','200','ok','3','Lumieres','-','-','','LU22');
INSERT INTO `BaseDeDonnee` VALUES ('Boule a facettes','','-','ok','1','Lumieres','-','-','','LU23');
INSERT INTO `BaseDeDonnee` VALUES ('Antichute de charge 250 kg','','-','','2','Lumieres','-','-','','LU24');
INSERT INTO `BaseDeDonnee` VALUES ('> 9m','','','','19','Cable','-','-','XLR','CA01');
INSERT INTO `BaseDeDonnee` VALUES ('< 9m','','','','39','Cable','-','-','XLR','CA02');
INSERT INTO `BaseDeDonnee` VALUES ('Petits','','','','7','Cable','-','-','XLR','CA03');
INSERT INTO `BaseDeDonnee` VALUES ('DMX (sans compter rail)','','','','26','Cable','-','-','DMX','CA04');
INSERT INTO `BaseDeDonnee` VALUES ('XLR male','','','','?','Cable','-','-','XLR-Jack','CA05');
INSERT INTO `BaseDeDonnee` VALUES ('XLR femelle','','','','8','Cable','-','-','XLR-Jack','CA06');
INSERT INTO `BaseDeDonnee` VALUES ('Jack','','','','14','Cable','-','-','XLR-Jack','CA07');
INSERT INTO `BaseDeDonnee` VALUES ('Speakon','','','','14','Cable','-','-','Speakon','CA08');
INSERT INTO `BaseDeDonnee` VALUES ('Grandes','','','','2','Cable','-','-','Rallonges','CA09');
INSERT INTO `BaseDeDonnee` VALUES ('Moyennes - petites','','','','19','Cable','-','-','Rallonges','CA10');
INSERT INTO `BaseDeDonnee` VALUES ('Enrouleurs','','','','6','Cable','-','-','Rallonages','CA11');
INSERT INTO `BaseDeDonnee` VALUES ('Alimentations','','','','44','Cable','-','-','Alims','CA12');
INSERT INTO `BaseDeDonnee` VALUES ('Rallonges d''alimentations','','','','5','Cable','-','-','Rallonges d''alims','CA13');
INSERT INTO `BaseDeDonnee` VALUES ('XLR -rca simple','','','','1','Cable','-','-','Autres','CA14');
INSERT INTO `BaseDeDonnee` VALUES ('RCA doubles','','','','3','Cable','-','-','Autres','CA15');
INSERT INTO `BaseDeDonnee` VALUES ('RCA simple','','','','2','Cable','-','-','Autres','CA16');
INSERT INTO `BaseDeDonnee` VALUES ('RCA double- petit jack','','','','4','Cable','-','-','Autres','CA17');
INSERT INTO `BaseDeDonnee` VALUES ('RCA double - double jack','','','','1','Cable','-','-','Autres','CA18');
COMMIT;
