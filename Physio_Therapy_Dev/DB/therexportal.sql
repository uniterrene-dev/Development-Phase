-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: myhealth
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bodyparts`
--

DROP TABLE IF EXISTS `bodyparts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bodyparts` (
  `bodypart_id` int(11) NOT NULL AUTO_INCREMENT,
  `bodypart` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(516) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  `type` int(11) DEFAULT NULL,
  PRIMARY KEY (`bodypart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=161 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bodyparts`
--

LOCK TABLES `bodyparts` WRITE;
/*!40000 ALTER TABLE `bodyparts` DISABLE KEYS */;
INSERT INTO `bodyparts` VALUES (1,'UPPER QUARTER','UPPER QUARTER',0,1),(2,'LOWER QUARTER','LOWER QUARTER',0,1),(3,'CORE/TRUNK','CORE/TRUNK',0,1),(4,'ELBOW','ELBOW',1,1),(5,'FOREARM','FOREARM',1,1),(6,'SCAPULA','SCAPULA',1,1),(7,'SHOULDER','SHOULDER',1,1),(8,'WRIST','WRIST',1,1),(9,'ANKLE','ANKLE',2,1),(10,'HIP','HIP',2,1),(11,'KNEE','KNEE',2,1),(12,'PELVIS','PELVIS',2,1),(13,'CERVICAL','CERVICAL',3,1),(14,'LUMAR','LUMAR',3,1),(15,'THORASIC','THORASIC',3,1),(16,'FLEXION',NULL,7,2),(17,'ANTERIOR DELTIOD',NULL,16,2),(18,'PECTORALIS MAJOR',NULL,16,2),(19,'CORACOBRACHIALIS',NULL,16,2),(20,'BICEPS BRACHII',NULL,16,2),(21,'EXTENSION',NULL,7,2),(22,'LATISSIMUS DORSI',NULL,21,2),(23,'TERES MAJOR',NULL,21,2),(24,'POSTERIOR DELTOID',NULL,21,2),(25,'PECTORALIS MAJOR',NULL,21,2),(26,'ABDUCTION',NULL,7,2),(27,'MIDDLE DELTOID',NULL,26,2),(28,'SUPRASPINATUS',NULL,26,2),(29,'PECTORALIS MAJOR',NULL,26,2),(30,'LATISSIMUS DORSI',NULL,26,2),(31,'EXTERNAL ROTAITON',NULL,7,2),(32,'INFRASPINATUS',NULL,31,2),(33,'TERES MINOR',NULL,31,2),(34,'POSTERIOR DELTOID',NULL,31,2),(35,'INTERNAL ROTATION',NULL,7,2),(36,'LATISSIMUS DORSI',NULL,35,2),(37,'TERES MAJOR',NULL,35,2),(38,'SUBSCAPULARIS',NULL,35,2),(39,'PECTORALIS MAJOR',NULL,35,2),(40,'ANTERIOR DELTOID',NULL,35,2),(41,'HORIZONTAL ABDUCTION',NULL,7,2),(42,'POSTERIOR DELTOID',NULL,41,2),(43,'INFRASPINATUS',NULL,41,2),(44,'TERES MINOR',NULL,41,2),(45,'PECTORALIS MAJOR',NULL,41,2),(46,'ANTERIOR DELTOID',NULL,41,2),(47,'ELEVATION',NULL,6,2),(48,'UPPPER TRAPEZIUS',NULL,47,2),(49,'LEVATOR SCAPULAE',NULL,47,2),(50,'RHOMBOIDS',NULL,47,2),(51,'DEPRESSION',NULL,6,2),(52,'LOWER TRAPEZIUS',NULL,51,2),(53,'PECTORALIS MINOR',NULL,51,2),(54,'UPWARD ROTATON',NULL,6,2),(55,'UPPER AND LOWER TRAPEZIUS',NULL,54,2),(56,'SERRATUS ANTERIOR',NULL,54,2),(57,'DOWNWARD ROTATION',NULL,6,2),(58,'RHOMBOIDS',NULL,57,2),(59,'LEVATOR SCAPULAE',NULL,57,2),(60,'PECTORALIS MINOR',NULL,57,2),(61,'RETRACTION',NULL,6,2),(62,'MIDDLE TRAPEZIUS',NULL,61,2),(63,'RHOMBOIDS',NULL,61,2),(64,'PROTRACTION',NULL,6,2),(65,'SERRATUS ANTERIOR',NULL,64,2),(66,'PECTORALIS MINOR',NULL,64,2),(67,'FLEXION',NULL,4,2),(68,'BICEPS',NULL,67,2),(69,'BRACHIALIS',NULL,67,2),(70,'BRACHIORADIALIS',NULL,67,2),(71,'Extension',NULL,4,2),(72,'TRICEPS',NULL,71,2),(73,'ANCONEUS',NULL,71,2),(74,'SUPINATION',NULL,5,2),(75,'BICEPS',NULL,74,2),(76,'SUPINATOR',NULL,74,2),(77,'PRONATION',NULL,5,2),(78,'PRONATOR TERES',NULL,77,2),(79,'PRONATOR QUADRATUS',NULL,77,2),(80,'FLEXION',NULL,8,2),(81,'FLEXOR CARPI RADIALIS LONGUS & ULNARIS',NULL,80,2),(82,'PALAMARIS LONGUS',NULL,80,2),(83,'EXTENSION',NULL,8,2),(84,'EXTENSOR CARPI RADIALIS LONGUS &BREVIS',NULL,83,2),(85,'EXTENSOR CARPI ULNARIS',NULL,83,2),(86,'RADIAL DEVIATION',NULL,8,2),(87,'FLEXOR CARPI RADIALIS',NULL,86,2),(88,'EXTENSOR CARPI RADIALIS LONGUS &BREVIS',NULL,86,2),(89,'ULNAR DEVIATION',NULL,8,2),(90,'FLEXOR CARPI ULNARIS',NULL,89,2),(91,'EXTENSOR CARPI ULNARIS',NULL,89,2),(92,'FLEXION',NULL,10,2),(93,'ILIOPSOAS',NULL,92,2),(94,'RECTUS FEMORIS',NULL,92,2),(95,'EXTENSION',NULL,10,2),(96,'GLUTEUS MAXIMUS',NULL,95,2),(97,'HAMSTRING',NULL,95,2),(98,'ABDUCTION',NULL,10,2),(99,'GLUTEUS MEDIUS',NULL,98,2),(100,'GLUTEUS MINIMUS',NULL,98,2),(101,'ADDUCTION',NULL,10,2),(102,'ADDUCTOR LONGUS & BREVIS',NULL,101,2),(103,'ADDUCTOR MAGNUS',NULL,101,2),(104,'PECTINEUS, GRACILIS',NULL,101,2),(105,'EXTERNAL ROTAITON',NULL,10,2),(106,'PIRIFORMIS',NULL,105,2),(107,'OBTURATOR INTERNUS & EXTERNUS',NULL,105,2),(108,'GEMELI',NULL,105,2),(109,'QUADRATUS FEMORIS',NULL,105,2),(110,'INTERNAL ROTATION',NULL,10,2),(111,'GLUTEUS MEDIUS',NULL,110,2),(112,'GLUTEUS MINIMUS',NULL,110,2),(113,'TENSOR FASCIA LATAE',NULL,110,2),(114,'PIRIFORMIS',NULL,110,2),(115,'FLEXION',NULL,11,2),(116,'HAMSTRINGS',NULL,115,2),(117,'EXTENSION',NULL,11,2),(118,'QUADRICEPS',NULL,117,2),(119,'DORSIFLEXION',NULL,9,2),(120,'ANTERIOR TIBIALIS',NULL,119,2),(121,'EXTENSOR HALLUCIS',NULL,119,2),(122,'PLANTAR FLEXION',NULL,9,2),(123,'GASTROCNEMIUS',NULL,122,2),(124,'SOLEUS',NULL,122,2),(125,'INVERSION',NULL,9,2),(126,'TIBIALIS POSTERIOR',NULL,125,2),(127,'ANTERIOR TIBIALIS',NULL,125,2),(128,'EVERSION',NULL,9,2),(129,'PERONEUS LONGUS',NULL,128,2),(130,'PERONEUS BREVIS',NULL,128,2),(131,'ANTERIOR PELVIC TILT',NULL,12,2),(132,'POSTERIOR PELCIT TILT',NULL,12,2),(133,'LATERAL PELVIT TILT',NULL,12,2),(134,'FLEXION',NULL,13,2),(135,'LONGUS CAPITUS',NULL,134,2),(136,'LONGUS COLII',NULL,134,2),(137,'STERNOCLEIDOMASTOID',NULL,134,2),(138,'EXTENSION',NULL,13,2),(139,'SPLENIUS',NULL,138,2),(140,'LATERAL FLEXION',NULL,13,2),(141,'SCALENUS',NULL,140,2),(142,'ROTATION',NULL,13,2),(143,'SPLENIUS',NULL,142,2),(144,'STERNOCLEIDOMASTOID',NULL,142,2),(145,'FLEXION',NULL,15,2),(146,'RECTUS ABDOMINUS',NULL,145,2),(147,'EXTENSION',NULL,15,2),(148,'SACROSPINALIS',NULL,147,2),(149,'ERECTOR SPINAE',NULL,147,2),(150,'ROTATION',NULL,15,2),(151,'LONGISSIMUS, PARS COSTALIS',NULL,150,2),(152,'EXTERNAL OBLIQUE ABDOMINUS',NULL,150,2),(153,'FLEXION',NULL,14,2),(154,'RECTUS ABDOMINUS',NULL,153,2),(155,'EXTENSION',NULL,14,2),(156,'SACROSPINALIS',NULL,155,2),(157,'ERECTOR SPINAE',NULL,155,2),(158,'ROTATION',NULL,14,2),(159,'LONGISSIMUS, PARS COSTALIS',NULL,158,2),(160,'EXTERNAL OBLIQUE ABDOMINUS',NULL,158,2);
/*!40000 ALTER TABLE `bodyparts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clinics`
--

DROP TABLE IF EXISTS `clinics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clinics` (
  `clinic_id` int(11) NOT NULL AUTO_INCREMENT,
  `clinic_name` varchar(256) NOT NULL,
  `clinic_address` text,
  `clinic_site` varchar(256) DEFAULT NULL,
  `clinic_email` varchar(256) DEFAULT NULL,
  `clinic_logo_path` varchar(256) DEFAULT NULL,
  `phone` varchar(256) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`clinic_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clinics`
--

LOCK TABLES `clinics` WRITE;
/*!40000 ALTER TABLE `clinics` DISABLE KEYS */;
INSERT INTO `clinics` VALUES (1,'My First Clinic','My Address','www.google.com','support@gmail.com','static/images/myhealth_1.png','8971603099','2016-11-15 23:59:37','2016-11-16 00:28:37'),(2,'Pr Clinic','asdsfdgdfgfhgfhgf','www.yahoo.com','prabhu3482@gmail.com','uploads/pr_clinic_myhealth_1.png','8971603099','0000-00-00 00:00:00','2016-11-16 09:45:06'),(3,'Prabhu Clinic','wqewqreweteyryryr','www.bing.com','prabhu3482@gmail.com','uploads/prabhu_clinic_img-13.jpg','8971603099','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `clinics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conditions`
--

DROP TABLE IF EXISTS `conditions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conditions` (
  `cond_id` int(11) NOT NULL AUTO_INCREMENT,
  `conditions` varchar(256) NOT NULL,
  `description` varchar(516) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  PRIMARY KEY (`cond_id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conditions`
--

LOCK TABLES `conditions` WRITE;
/*!40000 ALTER TABLE `conditions` DISABLE KEYS */;
INSERT INTO `conditions` VALUES (1,'Stroke','Stroke',0),(2,'Spinal Cord Injury','Spinal Cord Injury',0),(3,'Parkinsons','Parkinsons',0),(4,'Multiple Sclerosis','Multiple Sclerosis',0),(5,'Balance','Balance',0),(6,'Vestibular','Vestibular',0),(7,'Stretches','Stretches',1),(8,'Reaching','Reaching',1),(9,'Weight Bearing','Weight Bearing',1),(10,'Pre-Gait/Wt shift','Pre-Gait/Wt shift',1),(11,'Gait Training','Gait Training',1),(12,'Stretches','Stretches',2),(13,'Alter COG/BOS','Alter COG/BOS',5),(14,'Alter supporting surface/Somatosensory Challenge','Alter supporting surface/Somatosensory Challenge',5),(15,'Remove Visual Reliance','Remove Visual Reliance',5),(16,'Strategy Training','Strategy Training',5),(17,'Perturbations','Perturbations',5),(18,'Coordination','Coordination',5),(19,'Dynamic Stance Stability','Dynamic Stance Stability',5),(20,'Divided Attention','Divided Attention',5),(21,'BPPV/ Maneouver','BPPV/ Maneouver',6),(22,'Habituation','Habituation',6),(23,'Adaptation','Adaptation',6),(24,'Substitution','Substitution',6),(25,'Occulomotor exercises','Occulomotor exercises',6),(26,'VORx1','VORx1',23),(27,'VORx2','VORx2',23),(28,'Saccades','Saccades',25),(29,'Smooth Pursuit','Smooth Pursuit',25),(30,'Remembered Target','Remembered Target',25);
/*!40000 ALTER TABLE `conditions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipment`
--

DROP TABLE IF EXISTS `equipment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipment` (
  `equipment_id` int(11) NOT NULL AUTO_INCREMENT,
  `equipment` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(516) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  PRIMARY KEY (`equipment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipment`
--

LOCK TABLES `equipment` WRITE;
/*!40000 ALTER TABLE `equipment` DISABLE KEYS */;
INSERT INTO `equipment` VALUES (1,'Strengthening','Strengthening',0),(2,'Assisted Prop','Assisted Prop',0),(3,'Support Surface','Support Surface',0),(4,'Environment','Environment',0),(5,'Weight Bearing','Weight Bearing',0),(6,'Balance','Balance',0),(7,'Resistance Band','Resistance Band',1),(8,'Resistance Tube','Resistance Tube',1),(9,'Free Weights','Free Weights',1),(10,'Dumbbell','Dumbbell',1),(11,'Weighted Ball','Weighted Ball',1),(12,'Rickshaw','Rickshaw',1),(13,'Axillary Crutch','Axillary Crutch',2),(14,'PVC Pipe','PVC Pipe',2),(15,'Cane/Dowel','Cane/Dowel',2),(16,'Cone','Cone',2),(17,'Air Splint','Air Splint',2),(18,'Reeducation Board','Reeducation Board',2),(19,'Skate','Skate',2),(20,'Sensory Foam Roller','Sensory Foam Roller',2),(21,'Table','Table',3),(22,'BackBoard','BackBoard',3),(23,'Wheelchair','Wheelchair',3),(24,'Chair','Chair',3),(25,'Floor Mat','Floor Mat',3),(26,'Kitchen Counter','Kitchen Counter',4),(27,'Narrow Hallway','Narrow Hallway',4),(28,'Wall','Wall',4),(29,'Grass','Grass',4),(30,'Stairs','Stairs',4),(31,'Stepper','Stepper',5),(32,'Ankle Wedge','Ankle Wedge',5),(33,'Incline Board','Incline Board',5),(34,'Push Up Blocks','Push Up Blocks',5),(35,'Transfer Board','Transfer Board',5),(36,'Foam Pad','Foam Pad',6),(37,'Rocker Board','Rocker Board',6),(38,'Foam Roller','Foam Roller',6),(39,'Bosu Ball','Bosu Ball',6),(40,'Marbles','Marbles',6),(41,'Towel','Towel',6),(42,'Hurdles','Hurdles',6);
/*!40000 ALTER TABLE `equipment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exercise_steps`
--

DROP TABLE IF EXISTS `exercise_steps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exercise_steps` (
  `steps_id` int(11) NOT NULL,
  `exercise_id` int(11) NOT NULL,
  `description` varchar(516) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_loc` varchar(516) COLLATE utf8_unicode_ci DEFAULT NULL,
  `english` text COLLATE utf8_unicode_ci,
  `hindi` text COLLATE utf8_unicode_ci,
  `urdu` text COLLATE utf8_unicode_ci,
  `telugu` text COLLATE utf8_unicode_ci,
  `tamil` text COLLATE utf8_unicode_ci,
  `bengali` text COLLATE utf8_unicode_ci,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercise_steps`
--

LOCK TABLES `exercise_steps` WRITE;
/*!40000 ALTER TABLE `exercise_steps` DISABLE KEYS */;
INSERT INTO `exercise_steps` VALUES (1,1,'Description added from ui','1_1png.jpg','Lie on your back, with your knees bent and feet flat on the mat.','अपनी पीठ के बल लेट जाइए, अपने घूटनों को मोड़े हुए और पैर चटाई पर सपाट रखते हुए |','اپنے پیٹ کے بل لٹیں ،اور اپنے گھوٹنے موڑھئے اور اپنے تالے چٹائی پر سیدھا رکھے .','మంచం పైన వెల్లకిలా పడుకొని, రెండు మోకాళ్ళను వంచి, మీ పాదాలు మ్యాట్ కు సమాంతరంగా ఉంచండి.','முதுகு தரையில் படுமாறு நேராக காலை நீட்டி படுத்துக் கொள்ளவும். பிறகு முழங்காலை மடக்கி கொண்டு கால் பாதம் தரையில் படுமாறு வைக்கவும்.','',NULL,'2016-12-04 21:51:48'),(2,1,'Description added from ui','1_2png.jpg','Spread your knees far apart, so you feel a stretch in the muscles in the groin.','अपने गोड़ों को फैलायें जब तक की खिंचाव महसूस न करैं ।','اپنے گھوٹنے ایک دوسرے سے دور پہلے تب آپکو ایک کشیدگی محسوس ہونگی آپکے را ن کے پٹھوں میں .','తరువాత మీ మోకాళ్ళను పూర్తిగా ప్రక్కలకు విడదీయవలయును తద్వారా మీ గజ్జల్ల యొక్క కండరాలు సాగిన అనుభూతి కలుగును.','பிறகு சம்மணமிட்டு உட்காருவது போல் முழங்காலை விரிக்கவும்.உங்களுக்கு தொடையில் சதை இழுப்பது போல் இருக்கும்.','আপডেট বাঙ্গালী ',NULL,'2016-11-27 09:41:53'),(1,2,NULL,'2_1png.jpg','Sit at the front of a chair keeping your back straight. Extend left leg keeping the left knee straight.','अपनी पीठ को सीधा रखते हुए कुर्सी के आगे बैठ जाइए ','دائیں ہاتھ کی مدد سے اپنا بائیں ہاتھ اوپر کارے اور اپنے دائیں ٹانگ پر سیدھا رکھے .\nاور اپنے بائیں ہاتھ کو اپنے دائیں ہاتھ  سے نیچے دباے .','వీపు నిటారుగా ఉంచి కుర్చీలో ముందుకు కూర్చోండి','நாற்காலியில் முதுகை நேராக வைத்து உட்காரவும்.','',NULL,NULL),(2,2,NULL,'2_2png.jpg','With assistance from the right hand, pick the left hand up and place it flat on the right leg. Push down gently on the left hand with the right hand','दाहिने हाथ की सहायता से, बाएँ हाथ को उठाइए और उसे दाहिने पैर पर सपाट रख दीजिए | दाहिने हाथ से बाएँ हाथ पर नीचे की ओर धीरे धीरे धक्का लगाइए |','دائیں ہاتھ کی مدد سے اپنا بائیں ہاتھ اوپر کارے اور اپنے دائیں ٹانگ پر سیدھا رکھے . اور اپنے بائیں ہاتھ کو اپنے دائیں ہاتھ سے نیچے دباے .','మీ కుడి చేతితో ఎడమ చేతిని పట్టుకొని,కుడి కాలు మీద సమాంతరంగా పెట్టండి.\nకుడి చేతితో ఎడమ చేతి పైన బరువు పడేలాగా సున్నితంగా క్రిందకు నొక్కి ఉంచండి.\n','வலது கையினால் இடது கையை எடுத்து வலது முழங்காலில் வைக்கவும்.\nவலது கையினால் இடது கையை மெதுவாக அழுத்தவும்.\n','',NULL,NULL),(3,2,NULL,'2_3png.jpg','Lean forward by keeping your back straight, until you feel the stretch in the back of the thigh.Return back to the starting position.','अपनी पीठ सीधी रखते हुए आगे की ओर तब तक झुकिए, जब तक आप अपनी जाँघ के निचले हिस्से में खिंचाव महसूस नहीं करते हैं |\nप्रारंभिक स्थिति में वापस लौट आइए |\n','دائیں ہاتھ کی مدد سے اپنا بائیں ہاتھ اوپر کارے اور اپنے دائیں ٹانگ پر سیدھا رکھے . اور اپنے بائیں ہاتھ کو اپنے دائیں ہاتھ سے نیچے دباے .','మీ తొడ వెనుక భాగం ఫై భారం పడేంత వరకు, వీపు  భాగం నిటారుగా ఉంచి  ముందుకు వాలండి.\nనడుమును వెనక్కి వాల్చుతూ  యధాస్థానంలోకి రండి.\n','முதுகை நேராக வைத்து  உங்கள்  தொடையில் இழுப்பதை போல் உணரும் வரை  முன்னால் சாயவும்.\nபிறகு திரும்பவும் முதுகை நேராக கொண்டு வரவும்.\n','',NULL,NULL),(1,3,NULL,'3_1png.jpg','Sit on a mat, facing to the left with the left leg and knee straightened out.\nMake sure that the back of the thigh and knee are resting flat on the mat.\nThe right foot is resting on the floor.\n','\nबाएँ पैर के साथ चेहरे के बाएँ हिस्से को बाईं ओर रखते हुए और घूटने को सीधा रखकर, चटाई पर बैठ जाइए | सुनिश्चित कीजिए कि जाँघ का निचला हिस्सा और घूटना चटाई पर सपाट स्थिति में रहते हैं |\nदाहिना पैर फर्श पर रहता है |\n\n','دائیں پاؤں فرش پر آرام سے رکھے .پر آرام سے سیدھاراہے ..چٹائی پر بیٹھی , بائیں ٹانگ اور بائیں گھٹنے سیدھا کرے دھیان رکھے کی ران کے پیچے کا ہیسسا اور گھٹنے چٹائی ','మంచం మీద ఎడమ  వైపుకు కూర్చొని ఎడమ కాలు మరియు మోకాలు పూర్తిగా చాపండి.\nమీ  తొడ వెనుక భాగం  మరియు మోకాలు ను మంచం మీద  పూర్తిగా తాకే విధముగా ఉంచండి.\nఅలాగే మీ కుడి పాదం భూమికి తాకేటట్లు చూసుకోండి.','   இடது காலை பார்த்தபடி இடது முழங்காலை மடக்காமல் நேராக காலை நீட்டி பாயில்  உட்காரவும்.\nஉட்காரும்போது உங்கள் தொடை,முழங்கால் இரண்டும் பாயில் பட  வேண்டும்.\nவலது கால் பாதம் தரையை தொடவும்.\n','',NULL,NULL),(2,3,NULL,'3_2png.jpg','Place the left hand flat on the left leg with assistance from the right hand, and gently push down on the left hand with the right hand.\nLean forward, keeping back straight until a stretch is felt  in the back of left thigh.','बाएँ हाथ को दाहिने हाथ की मदद से बाएँ पैर के ऊपर रखिए, और बाएँ हाथ को धीरे धीरे दाहिने हाथ से नीचे की ओर धक्का लगाइए |\nअपनी पीठ सीधी रखते हुए आगे की ओर तब तक झुकिए, जब तक आप अपनी बाईं जाँघ के निचले हिस्से में खिंचाव महसूस नहीं करते हैं |\n','اپنا بائیں ہاتھ اپنے  بائیں پیر پار اپنے دائیں ہاتھ کے معداد سے رکھے اور دھیرے سے بائیں دباے اپنے دائیں سے.','కుడి చేతి సాయముతో ఎడమ చేతిని ఎడమ కాలు తొడ మీద సమాంతరంగా పెట్టి సున్నితంగా కిందకు నొక్కి ఉంచండి \n\nమీ ఎడమ తొడ వెనుక భాగం ఫై భారం పడేంతవరకు వీపు నిటారుగా ఉంచుతూ ముందుకు వాలవలయును.','வலது கையினால் இடது கையை எடுத்து இடது  முழங்காலில் வைக்கவும்.\n\nவலது கையினால் இடது கையை மெதுவாக அழுத்தவும்.\n\nமுதுகை நேராக வைத்து  உங்கள்  இடது கீழ் தொடையில் இழுப்பதை போல் உணரும் வரை  முன்னால் சாயவும்.\nபிறகு திரும்பவும் முதுகை நேராக கொண்டு வரவும்.','',NULL,NULL),(1,4,NULL,'4_1png.jpg','Lie flat on your back, and place the loop of the strap around your left ankle.Hold the other end of the strap with your right hand','','\nاپنے پیٹ کے باللاٹیں اور سطرپ کے لوپ کو آپکے بائیں ٹخنوں.\nسترپ کا دوسرا کونہ  اپنے  دائیں ہاتھمیں  پاک ڈی.','వీపు భాగం పూర్తిగా అనుకునేటట్టు వెల్లికల పడుకుని , ఏడమ మడం నకు స్ట్రాప్ తగిలించుకోండి. \n\nఅలాగే మీ కుడి చేత్తో స్ట్రాప్ యొక్క  రెండవ భాగం ను పట్టుకోవలయును','முதுகை நேராக வைத்து படுக்கவும். தோல்வார் பட்டை துணியால்  உங்கள் இடது கணுக்காலை சுற்றி வலது கையால் வாரின் நுனியை பிடிக்கவும்,','',NULL,NULL),(2,4,NULL,'4_2png.jpg','Lift the leg straight up by pulling on the strap with your right hand.','','اپنے دائیں ہاتھسے  سترپ کو کھیچہتےہے  اپنا پیر سیدھا اٹھے .','కుడి చేత్తో పట్టుకున్న స్ట్రాప్ సహాయంతో మీ  ఎడమ కాలిని నిటారుగా ఫై కి లేపవలయును.','வலது கையால் தோல்வார்  பட்டையை பிடித்து இழுத்து , இடது காலை நேராக மேலே  தூக்கவும்.','',NULL,NULL),(3,4,NULL,'4_3png.jpg','Pull the leg in towards the right leg, until a stretch is felt on the side of the left hip.\nHold it for 30 seconds. Bring the leg back on the mat with the help of strap at the end of stretch.\n','','\nابّ  پیر کو واپس چٹائیپار  رکھے ستراپ  کی معداد سے اور ستراچ کھٹم کارے .سیکنڈ30 کے لئ ے وہیں روکے اب اپنا بائیں ٹانگ کو اپنے دائیں ٹانگکے  طرف کھیچے     جاب تک آپکو بائیں ہپکی  تعرف کشیدگی محسوس نا ہو','ఎడమ తొంటి ఫై భారం పడేంతవరకు ఎడమ కాలును కుడి కాలి వైపు కు లాగవలయును. అలా 30 సెకన్లు ఉంచి  తిరిగి మరల యధాస్థానం లో కాలును తీసుకురావాలి.','இடது காலை, வலது காலை நோக்கி இழுக்கவும்.உங்கள் இடது இடுப்பு பகுதியில் இழுப்பதை உணர்வீர்கள்.\n30 நொடிகள் வரை வைத்து இருக்கவும்.\nபிறகு காலை திரும்ப முன் போல் பாயில் வைக்கவும்.','',NULL,NULL),(1,5,NULL,'5_1png.jpg','Lie at the edge of the bed with both knees bent and back flat on the bed.','','پیٹ کے بل لاتے ایک پلنگ کے کونے پار اور دونو \nگھٹنے کو مؤدھا لے .','ఎత్తయిన మంచం మీద రెండు మోకాళ్ళు మడిచి మంచం కుడి అంచుకి పడుకోండి\nమీ వీపు ని మంచానికి పూర్తి గా అనుకునేలా పడుకోండి ','முதுகை நேராக வைத்து,இரு முட்டியையும் மடக்கி கொண்டு, பாயின் நுனியில் படுக்கவும்.','',NULL,NULL),(2,5,NULL,'5_2png.jpg','Drop your left leg on the floor, until you feel a stretch on the front of your thigh.Hold the stretch for 30 seconds. Lift your leg back up at the end of the stretch.','','اپنا بائیں ٹانگکو  نیچے لٹکا دے جبتک آپکو کھیچاو محسوس نا هو اپنے ران کے سامنے کے حسسے میں \nاسے 30سیکنڈ تک لٹکاے رکھے اب پیر کو واپس اوپر پلنگ پار رکھ لے','మీ ఎడమ కాలిని ఎతైన మంచం మీదనించి క్రిందకి నిదానంగా జార విడవండి.\nదీనివలన మీ ఎడమ కాలు  తొడ  ముందర కండరాలు సాగిన అనుభూతి కలుగుతుంది\nఅలా ఒక 30 సెకనులు ఉంచి మీ ఎడమ కాలిని ఎత్తి  తిరిగి మంచం మీదకి యదా స్థానములో  తీసుకురండి. ','உங்கள்   தொடையின் மேல் பகுதியில் இழுப்பதை உணரும் வரை ,இடது காலை கீழே தொங்க  விடவும்.\n30 நொடி வரை அப்படியே இருக்கவும்.\nபிறகு காலை முன்போல் பாயில் திரும்ப வைக்கவும்.\n\n','',NULL,NULL),(1,6,NULL,'6_1png.jpg','Sit in a chair, lean forward to reach for left ankle','','ایک کرسی پر بیٹھ کر سامنے جھکے اور اپنے دائیں ہاتھ سے اپنا بائیں ٹخنوں کو چو پاے .','కుర్చీ లో కూర్చొని ఎడమ కాలి మడం ని అందుకొనడానికి ముందుకు వంగండి.','','',NULL,NULL),(2,6,NULL,'6_2png.jpg','Hold your left ankle with right hand.','','دائیں ہاتھ سے اپنے بائیں ٹخنے پکڑ.','కుడి చేతితో ఎడమ కాలు మడంని పట్టుకోండి. ','இடது கணுக்காலை வலது கையினால் பிடிக்கவும்.','',NULL,NULL),(3,6,NULL,'6_3png.jpg','Pick your left ankle with right hand, lean back to place the left foot on the right thigh, making a figure 4 with left leg. ','','دائیں ہاتھ سے اپنے بائیں ٹخنے اٹھائی ،اور پیچھے ہتھے تاکی اپنا بائیں پاؤں اپنے دائیں ران رکھ سکے .','ఎడమ కాలి మడమును పట్టుకొని, మీ ఎడమ కాలి ని ఫై కి లేపి  కుడి తొడ ఫై ఉంచాలి','நிமிர்ந்து  உட்கார்ந்து கொண்டு ,இடது கணுக்காலை ,வலது கையினால் பிடித்து ,வலது தொடையில் வைக்கவும்.','',NULL,NULL),(4,6,NULL,'6_4png.jpg','Lean forward, holding the left ankle with right hand, until you feel a stretch in your left buttock muscle.\nHold the stretch for 30 seconds.\nLean back and bring the leg back to the floor at the end of stretch. Do’s:\nKeep the back straight throughout the stretch.             Don’ts:Do not slouch your back.\nTry not to lift the knee up during the stretch.','','اپنا بائیں ٹانگکو  نیچے لٹکا دے جبتک آپکو کھیچاو محسوس نا هو اپنے ران کے سامنے کے حسسے میں \nاپنی پیٹ کو جھکاے نا رکھے اور گھوٹنے کو اوپر نا اوتھیےاپنی پیٹ سیدھی رکھے یہ پورے شٹریچ کے دوراناسے 30سیکنڈ تک لٹکاے رکھے اب پیر کو واپس اوپر پلنگ پار رکھ لے \n','ఎడమ కాలి  మడముని పట్టుకొని నడుము ని నిటారుగా ఉంచుతూ ముందుకి వంగండి.\nదీనివలన మీ ఎడమ కాలి  పిరుదల కండరాలు సాగిన అనుభూతి కలుగుతుంది\nఅలా 30 సెకనులు పట్టుకొని ఉండాలి.\nతరువాత నడుముని వెనక్కు వాల్చి తిరిగి యధాస్థానంలోకి ఎడమ పాదాన్ని భూమి మీద ఆనించండి. జాగ్రత్తలు:\nనడుమును ఎల్లప్పుడూ నిటారుగా ఉంచండి.చెయ్యకూడని కదలికలు:\nమీ తలను కానీ నడుమును కానీ ముందుకు వాల్చకూడదు.  \nమీ మోకాలిని వ్యాయామము జరిగే క్రమము లో పైకి లేపకూడదు','வலது கையினால் இடது கணுக்காலை பிடித்து கொண்டே, உங்கள் இடது சூத்தாம்பட்டையில் இழுப்பதை உணரும் வரை , முன்னாள் சாயவும்.\n30 நொடிகள் அப்படியே இருக்கவும்.\nபிறகு முதுகை நேராக்கி,காலை கீழே விடவும். முதுகை எப்பொழுதும் நேராக வைத்து இருக்கவேண்டும்.முதுகை கூன் போட  கூடாது.\nமுட்டியை தூக்க கூடாது.','',NULL,NULL),(1,7,NULL,'7_1png.jpg','Scoot forward in the wheelchair.\nPlace the loop of strap around your left ankle','','وہیل چیر پار اگے ہتھے اور شٹراپ کے لوپ کو اپنے  ٹخنوںے پار لپیٹ لے','వీల్ చైర్ లో ముందుకు జరిగి కూర్చొని, స్ట్రాప్ ని ఎడమ  మడం నకు తగిలించుకోవాలి.','சக்கர நாற்காலியில் உட்கார்ந்து கொள்ளவும்.\nதோல்வார் பட்டையை இடது கணுக்காலை சுற்றி,சுற்றவும்.','',NULL,NULL),(2,7,NULL,'7_2png.jpg','Place the left foot on the floor with the heel touching the floor.','','اب اپنا بائیں ایڈی ظمین پار رکھے . ','మడంని నేలను తాకేవిదం గా మీ ఎడమ కాలిని నేల మీద ఉంచాలి.','இடது காலை ,குதிகால் தரையில் படுமாறு வைக்கவும்.','',NULL,NULL),(3,7,NULL,'7_3png.jpg','\nLift the ankle up by pulling on the strap until you feel a stretch in the back of your calf.\nHold the stretch for 30 seconds. \nDo’s:\nKeep the back straight throughout the stretch.\nDon’ts\nDo not slouch your back.\nTry not to lift the knee up during the stretch.\n','','آ گے جھکے ،دائیں ہاتھ سے اپنے بائیں ٹخنے پکاڈ کر  جبتک آپکو شٹراچ محسوس هو .  \n\nاسے 30 سیکنڈ تک رہنے\nاپنی پیٹ سیدھی رکھے یہ پورے شٹریچ کے دورا\nاپنی پیٹ کو جھکاے نا رکھے اور گھوٹنے کو اوپر نا اوتھی','మీ పిక్క కండరం సాగిన అనుభూతి కలిగేంతవరకు మీ మడం ను స్ట్రాప్ సాయంతో ఫై కి లేపి వుంచవలయును అలా 30 సెకన్లు ఉంచాలి.\nజాగ్రత్తలు:\nనడుమును ఎల్లప్పుడూ నిటారుగా ఉంచండి.\nచెయ్యకూడని కదలికలు:\nమీ తలను కానీ నడుమును కానీ ముందుకు వాల్చకూడదు.  \nమీ మోకాలిని వ్యాయామము జరిగే క్రమము లో పైకి లేపకూడదు','ஆடுசதையில் இழுப்பதை உணரும் வரை,  கணுக்காலை தோல்வார் பட்டையினால் இழுக்கவும்.\n30 நொடி அப்படியே இருக்கவும்.முதுகை எப்பொழுதும் நேராக வைத்து இருக்கவேண்டும்.முதுகை கூன் போட  கூடாது.\nமுட்டியை தூக்க கூடாது.','',NULL,NULL),(1,8,NULL,'8_1png.jpg','Lie with your back flat at the edge of mat.','','.پیٹ سیدھی رکھ کر بسترکے کونے پار لاتی','వీపు భాగం పూర్తిగా అనేటట్లు మంచం  అంచునకు  పడుకోవాలి.','பாயின் நுனியில் முதுகை நேராக வைத்து படுக்கவும்.','',NULL,NULL),(2,8,NULL,'8_2png.jpg','Place your left leg onto the floor.','','اپنی بائیں  ظمین پار رکھے ','ఎడమ కాలును నేలపై  ఉంచాలి.','இடது காலை தரையில் வைக்கவும் ','',NULL,NULL),(3,8,NULL,'8_3png.jpg','Hold the leg down until you feel a stretch in the front of your hips.\nHold the stretch for 30 seconds and lift the leg back onto the mat.','','اپنی بائیں ٹانگنیچے ہی رکھے جبتک آپکو اسطرچ محسوس نا هو آپکے کولہوں کے سامنے','తొంటి ముందర కండరము పై సాగిన అనుభూతి కలిగేంతవరకు  మీ  కాలును క్రిందికి జార్చవలయును.\nఅలా 30  సెకన్లు ఉంచి తిరిగి మరల కాలును యధాస్థానంగా మంచం పై కి తీసుకురావలయును.','இடுப்பு மேல்  சதையில் இழுப்பதை உணரும் வரை ,காலை கீழே விடவும்.\nஇப்படியே 30 நொடி வைத்து இருக்கவும்.\nபின் காலை பழைய படி மேலே பாயில்  வைக்கவும்.','',NULL,NULL),(1,9,NULL,'9_1png.jpg','Lie flat on the bed with left arm straight out','','پلنگ پار سیدھا لیٹ جائے اور اپنا بایاں بازو کو اوپر اٹھے ','మంచం మీద వెల్లకిలా పడుకొని ఎడమ చేతిని బారుగా చాపవలయును \n','இடது கையை நேராக வைத்து பாயில் படுக்கவும்.','',NULL,NULL),(2,9,NULL,'9_2png.jpg','Bend left elbow in towards stomach.','','بائیں کہنی کو پیٹ کی طرف مؤد لے','ఎడమ మోచేతిని పొట్టవైపుకు మడవవలయును.','இடது முழங்கையை மடக்கி வயிறு பக்கம் திருப்பவும்.','',NULL,NULL),(1,10,NULL,'10_1png.jpg','Lie flat on your back with both feet resting on a ball','','اپنی پیٹ کے بل لیٹ جائے اور دونو  پاؤن بلل پار رکھدی.','వీపు భాగం పూర్తిగా తాకేటట్లు పడుకొని మీ రెండు పాదాలు బంతి ఫై సులువుగా ఉంచాలి.','இரு காலையும் பந்தின் மேல் வைத்து ,முதுகை தரையில் படுமாறு படுக்கவும்.','',NULL,NULL),(2,10,NULL,'10_2png.jpg','Bring the ball in by bending both knees and pushing down through the heels on the ball','','اپنے پیروں کی ایدی سے بلل کو اندر کی طرف کھیچ لے اپنے گھٹنو کو مؤدتے ہویے','మీ రెండు  మోకాళ్లను వంచి మడముల  సాయంతో బంతి ని లోపలికి లాగండి .','குதிகாலை பந்தின் மேல் வைத்து அழுத்தி, முட்டியை மடக்கி பந்தை உள்நோக்கி இழுக்கவும்.','',NULL,NULL),(1,11,NULL,'11_1png.jpg','Lie flat on the bed.','','پلنگ پار سیدھا لیٹ جائے ','మంచం పైన వెల్లకిలా పడుకొనవలయును ','காலை நேராக வைத்து பாயில்  படுக்கவும்.','',NULL,NULL),(2,11,NULL,'11_2png.jpg','Bring the left foot out to the edge of the bed from the hip, sliding the heel out.','','اپنا بائیں پاؤں پلنگ کے کونے پار لاے اپنی ایدی کو گھسیطا ہویے','ఎడమ కాలును మంచం అంచునకు తీసుకురావలయును.','இடது காலை இடுப்பில் இருந்து நேராக வைத்து ,  பாயின் ஓரத்தில்   வைத்து , குதிகாலை வெளியில் நீட்டவும்.','',NULL,NULL),(1,12,NULL,'12_1png.jpg','Lie with the head of the bed raised on wedge and pillows\nHold a theraband with left hand.','','آدھا لیٹی اپنے سر کو تھودا انچا رکھتے ہویے کسی تاکہے کے معداد سے \nاور اسطرپ کو اپنے بائیں حات سے پکاڈ لے\n','తల భాగం ఎత్తుగా ఉన్న మంచం మీద వెల్లకిలా  పడుకొని మీ ఎడమ చేత్తో తెరబ్యాండ్ ను పట్టుకొని ఉండాలి','பாயில் தலையினை வைத்து தலையை உயர்த்தி படுக்கவும்.\nதெராபான்ட்யை  இடது கையில் பிடிக்கவும்.','',NULL,NULL),(2,12,NULL,'12_2png.jpg','Keeping the left elbow straight, bring the arm straight up pulling against the theraband towards the ceiling. ','','اپنا بائیں کہنی سیدھا رکھے  اور اسطرپ کو چاٹ کی طرف کھیچۓ','ఎడమ చేతితో పట్టుకున్న తెరబ్యాండ్ ను బలంగా లాగుతూ భుజాన్ని మోచెయ్యి వంచకుండా సీలింగ్ వైపు పైకి లేపాలి ','இடது கையை நேராக வைத்து,முட்டியை மடக்காமல் தெராபாண்டை  மேல் நோக்கி  நேராக இழுக்கவும்.','',NULL,NULL),(1,13,NULL,'13_1png.jpg','Sitting in a chair, hold a cane with arms stretched out in front with both hands.','','ایک کرسی پر بیٹھا اور چھڑی کو آپنے دونو ہاتوں سے پکاڈ لی','కుర్చీ లో కూర్చొని రెండు చేతులు నిటారుగా ముందుకు  ఉంచి చేతికఱ్ఱను పట్టుకోవాలి','நாற்காலியில் உட்கார்ந்து கொண்டு ,பிரம்பு குச்சியை இரு கையினால் நேராக பிடிக்கவும். ','',NULL,NULL),(2,13,NULL,'13_2png.jpg','Keeping elbows straight, rotate trunk to the right by turning to the right.','','آپنے بازو کو سیدھا رکھے اور دائیں طرف کامر کو موڈلی','రెండు చేతులని ముందుకు చాపి మోచేతులని నిటారుగా ఉంచుతూ కుడి వైపుకు  తిరగండి ','முழங்கையை  மடக்காமல் பிரம்பை பிடித்து கொண்டு,உடம்பை வலது பக்கம் திருப்பவும்','',NULL,NULL),(3,13,NULL,'13_3png.jpg','Keeping elbows locked, rotate trunk to the left by turning to the left.','','کوہنیوں کو سیدھا رکھے اور کامر سے بائیںطرف  موڈ لی بائیںطرف موڈ کر','రెండు చేతులని ముందుకు చాపి మోచేతులని నిటారుగా ఉంచుతూ ఎడమ వైపుకు తిరగండి ','முழங்கையை அப்படியே நேராக வைத்து இடது பக்கம் திரும்பவும்','',NULL,NULL),(1,14,NULL,'14_1png.jpg','Sit facing forward in a chair. \nHold a cane in your lap with right palm facing down to the floor and left palm facing up to the ceiling.  Keep the elbows straight.','','ایک کرسی پر بیٹھا اور چڈی کو دونو ہاتوں سے پکاڈ ے جہاں اپکا ایک تل وہ چاٹ کی ار هو اور دوسرا ظمین کی\nعر اور آپنے دونو کوہنیوں سیدھے رکھے .\n','కుర్చీ లో కూర్చొని రెండు చేతులతో చేతికఱ్ఱను వల్లోపట్టుకోండి .\nపైన బొమ్మ లో చూపించిన విధంగా ఎడమ అర చేతిని పైకి చూపిస్తూ కుడి చేతిని నేల కు చూపిస్తూ పట్టుకోండి .','நாற்காலியில் நேராக பார்த்து உட்காரவும்.\nபிரம்பு குச்சியை வலது கையினால் கீழே தரையை நோக்கியும் ,இடது கை மேல் நோக்கியும் பிடிக்கவும்.முழங்கையை மடக்க கூடாது.\n','',NULL,NULL),(2,14,NULL,'14_2png.jpg','Lift the cane to the left and up towards the ceiling.\nLift the cane by moving the  left shoulder up away from the body and by pushing up with the right hand and arm.\nWhile lifting the cane, make sure the elbows are straight so that the movement comes from the shoulders.\nDo’s:\nKeep the elbows straight at all times.\n','','چھڑی کو اوپر اور بائیں تعرف سیدھے ہاتھوں سے چھت کی تعرف لیجیے .آپنے دائیں ہاتھا کے معداد سے . \nچھڑی کو اٹھاتے وقت دھیان رکھے کے آپکے کوہنیوں سیدے راہے تاکی حرکت کندھے سے هو .\nآپکے کوہنیوں سیدے رکھے .\n','రెండు చేతులతో చేతి కర్ర పట్టుకొని, కుడి చెయ్యి  ఆధారము తో ఎడమ భుజాన్ని వంటికి దూరంగా పైకి లేపండి.\nరెండు మోచేతులని ఎల్ల ప్పుడూ  చాపి ఉంచండి  \n','குச்சியை இடது பக்கம் மேல் நோக்கி தூக்கவும்\nகுச்சியை மேல் நோக்கி தூக்கும்போது ,இடது தோள்பட்டையை மேல் நோக்கி உடலிலிருந்து தொலைவில் நகர்த்தி   மற்றும் வலதுகையை மேல் நோக்கி தள்ளவும்.தூக்கும் போது  உங்கள் முழங்கை நேராக இருக்கவும் .உங்களது அசைவு உங்கள் தோள்பட்டையில் இருந்து வரவும்.\nதூக்கும் போது  உங்கள் முழங்கை நேராக இருக்கவும் \n','',NULL,NULL),(1,15,NULL,'15_1png.jpg','Hold dowel with both hands, with the left hand held out, Left palm facing up and right palm facing down.','','پیٹ کے بل لیٹ جائے اور ڈنڈا کو پکاڈ لی بیان ہاتھ بہار کی تعرف اور دایاں ہاتھ نیچے کی تعرف رکھے . ','ఎడమ చేతిని బయటకు ఉంచి ఎడమ అర చెయ్యి ఇంటి పైకప్పు కు చూపుతూ  రెండుచేతులతో  కర్రను పట్టుకోవాలి','இடது  கை முழங்கை வரை தரையில் பட,கம்பு குச்சியை இரு கைகளால் பிடித்து,அதில் வலது உள்ளங்கை கீழே பார்க்கவும் ,இடது  உள்ளங்கை மேலே பார்க்கவும். ','',NULL,NULL),(2,15,NULL,'15_2png.jpg','\nLift the left arm up and out away from the body with assistance from the right hand, pushing the dowel up and out .','','ابّ دیں ہاتھ کی معداد سے بایں ہاتھ اور ڈنڈے کو شریر سے بہار کی تعرف دھکے لی','ఎడమ చతిని వంటికి కి దూరం గా ఉంచి కుడి చేతి సహాయంతో కర్రను దూరంగా పైకి, వెలుపలకు  నెట్టవలయును','இடது தோள்பட்டையை மேல் நோக்கி தூக்கி உடலிலிருந்து தொலைவில் நகர்த்த,வலது கையால்   குச்சியை மேல் நோக்கி தள்ளவும்.','',NULL,NULL),(3,15,NULL,'15_3png.jpg','Complete the movement by straightening the left elbow and the shoulder stretched as far out as possible.','','ابّ یے مشق کو پورا کارے اپنا بائیں کونی اور کندھے کو پورا سیدھا کارے جتنا هو سکے .','ఎడమ మోచేయి మరియు భుజంను నిటారుగా వుంచి  వీలూఅయినంతవరకు కర్ర సహాయముతో ఎడమ భుజమును చాపవలయును','','',NULL,NULL),(1,16,NULL,'16_1png.jpg','Lie down flat on your back. Hold a dowel in both hands with palms facing down. Keep the elbows straight at all times','','آپنے پیٹ کے بل لاتیں اور ڈنڈے کو دونو ہاتوں سے پکاڈ لے . اپنی کونی سیدھی .','వెల్లికల పడుకొని పైన బొమ్మలో చూపించిన విధముగా రెండు అరచేతులు నేల వైపు చూసేటట్టు  కర్రను పట్టుకొనవలయును.  ','முதுகை நேராக வைத்து படுக்கவும் .இருகைகளினால், உள்ளங்கை கீழே பார்க்க  குச்சியை பிடித்து கொள்ளவும்.முழங்கை எப்போதும் நேராக இருக்கவும்.','',NULL,NULL),(2,16,NULL,'16_2png.jpg','Lift the dowel up by raising the arms up from the shoulder. \nKeep the elbows straight.','','ڈنڈے کو کاندھو کی معداد سے اپپر اٹھے .','రెండు మోచేతులను నిటారుగా ఉంచి  , రెండు భుజాలు పైకి లేపుతూ  కర్రను పైకి లేపండి ','','',NULL,NULL),(1,17,NULL,'17_1png.jpg','Keeping the left elbow bent at 90 degrees, hold a dowel in both hands. Hold the dowel in the left hand with the palm facing in towards the dowel.','','اپنی بائیں کونی کو 90 ڈگری موڈ لی ، ڈنڈے کو دونو ہاتھ سے پکاڈ لی اور بائیں ہاتھلی  ایک ڈنڈے کی کونے پار \nرکھے .','ఎడమ మోచేతిని 90 డిగ్రీ కోణంలో  వంచి కర్రను రెండు చెతులతో పట్టుకోవలయును\nపైన బొమ్మలో చూపించిన విధంగా ఎడమ అరచెయ్యి కర్ర ను చూసేలా పట్టుకోండి ','இடது முழங்கையை 90° மடக்கி ,குச்சியை இருகைகளால் பிடிக்கவும்.குச்சியை இடது கை உள்ளங்கை, குச்சியை பார்க்க பிடித்து கொள்ளவும்.\n','',NULL,NULL),(2,17,NULL,'17_2png.jpg','Turn the shoulder out by pushing the dowel in the left hand out with the right hand.','','بائیں  کندھے کو بہار کی تعرف کرے آپنے دیں ہاتھ سے ڈنڈے کو دھکے لتی ہویے .','కర్ర ఆధారముగా కుడి చేతితో ఎడమ అరచెయ్యిని బయటకు త్రొస్తూ ఎడమ భుజాన్ని బయటకు తిప్పండి ','','',NULL,NULL),(1,18,NULL,'18_1png.jpg','Lie down on your back holding a cane in both hands with palms of both hands facing down to the floor.','','اپنے پیٹ کے بل لاتیں اور چڈی کو آپنے دونو ہاتوں سے پکاڈ لی جی ، اور دونو ہاتھلی ظمین کی تعرف رکھے .','వెల్లికల పడుకొని రెండు అరచేతులను నేల  వైపు  చూపిస్తూ  కర్రను పట్టుకోవలయును','மல்லாக்க படுத்து கொண்டு  ,குச்சியை இரு  கைகளாலும் ,உள்ளங்கை கீழே பார்க்க   பிடிக்கவும்.','',NULL,NULL),(2,18,NULL,'18_2png.jpg','Keeping elbow straight, move the cane out to the left with assistance from the right hand.','','آپنے کونی سیدھے رکھے اور چڈی کو بائیں تعرف بہار دھکے لی آپنے دیں ہاتھ کی معداد سے .','మోచేతిని నిటారుగావుంచి కుడి చేతి సాయంతో కర్రను ఎడమవైపు కు కదిలించ వలయును','வலது கையின் உதவியுடன் முழங்கையை மடக்காமல் ,குச்சியை இடது பக்கம் நகர்த்தவும்.','',NULL,NULL),(1,19,NULL,'19_1png.jpg','Lie down on your back holding a cane in both hands with palms of both hands facing down to the floor.','','اپنے پیٹ کے بل لاتیں اور چڈی کو آپنے دونو ہاتوں سے پکاڈ لی جی ، اور دونو ہاتھلی ظمین کی تعرف رکھے .','వెల్లికల పడుకొని రెండు అరచేతులను నేల  వైపు  చూపిస్తూ  కర్రను పట్టుకోవలయును','மல்லாக்க படுத்து கொண்டு  ,குச்சியை இரு  கைகளாலும் ,உள்ளங்கை கீழே பார்க்க   பிடிக்கவும்.','',NULL,NULL),(2,19,NULL,'19_2png.jpg','Keeping elbow straight, move the cane out to the right with assistance from the right hand.','','چڈی کو دونو ہاتوں سے پکاڈ لی ، اوپر اٹھیں اور دیں تعرف گھما یے دیں ہاتھ کی معداد سے .','రెండు చేతులతో కర్రను పై కి పట్టుకొని కుడి చేతి సాయంతో కుడి వైపుకు కదప వలయును','வலது கையின் உதவியுடன் ,குச்சியை இரு கைகளால் பிடித்து   மேலே தூக்கி ,வலது பக்கம் திரும்பவும்.','',NULL,NULL),(1,20,NULL,'20_1png.jpg','Lie down on your back holding a dowel in both hands with the elbows bent at 90 degrees.\nThe dowel is held such that the palms of both hands face down to the floor.','','پیٹ کے بل لاتیں اور چڈی کو دونو ہاتوں سے پکاڈ لی کونے کو 90 ڈگری موڈ لی .\nچڈی کو اس تارہا پکاڈ لی کی آپکے دونو ہاتھلی ظمین کی تعرف هو ...','90 డిగ్రీ  కోణం లో మోచేతిని వంచి, రెండు అరచేతులను నేల వైపుకు చూసేటట్టు కర్రను పట్టుకొని వెల్లికల పడుకోవలయును.','மல்லாக்க படுத்து கொண்டு,முழங்கையை 90° வைத்து ,குச்சியை இரு கைகளாலும் பிடித்து கொள்ளவும்.\nகுச்சியை பிடிக்கும் போது உங்கள் உள்ளங்கை இரண்டும் தரையை நோக்கி இருக்கவும்.','',NULL,NULL),(2,20,NULL,'20_2png.jpg','Keeping the elbow bent, push the dowel inwards to the right hand with the left hand.','','آپنے گھٹنے موڈلی ، اب آپنے بائیں ہاتھ کی معداد سے چڈی کو دائیں ہاتھ  کی تعرف دھکے لی ...','మోచేతిని వంచి ఉంచి కర్రను ఎడమ చేత్తో కుడిచేతి వైపు కు  నెట్టవలయును','முழங்கையை மடக்கி ,குச்சியை இடது கையால் வலது கை உட்பக்கம் தள்ளவும்.','',NULL,NULL),(1,21,NULL,'21_1png.jpg','Hold the left arm at the wrist with the right hand','','آپنے دائیں ہاتھ سے اپنی بائیں بازو کی  کلائی کو پکاڈ لی ..','కుడి చేత్తో ఎడమ చేతి మణికట్టు ను పట్టుకోవలయును ','வலது கையால் , இடது கை மணிக்கட்டை  பிடிக்கவும் .\n','',NULL,NULL),(2,21,NULL,'21_2png.jpg','With the elbow locked, lift left arm up towards the ceiling with support from the right hand.','','اب اپنے بایں ہاتھ کو بنا کونی تدا کرے دیں ہاتھ کی معداد سے اوپر کی طرف لے جین ..','ఎడమ మోచెయ్యి బిగించి కుడి చేయిసాయంతో భుజాన్ని  సీలింగ్ వైపుకు పైకి ఎత్తాలి ','முழங்கையை மடக்காமல்,வலது கையின் உதவியுடன் இடது கையை மேல் நோக்கி உயர்த்தவும்.','',NULL,NULL),(1,22,NULL,'22_1png.jpg','Sit in a chair with both hands resting flat above both knees.','','ایک کرسی پر بیٹھ اور دونو ہاتھ دونو گھٹنوں پار rآکھے','మోకాలి ఫై మీ రెండు చేతులని ఉంచి కుర్చీలో కూర్చొనవలయును ','நாற்காலியில் உட்கார்ந்து கொண்டு ,இரு கைகளையும் இரு முழங்காலில் வைக்கவும்.','',NULL,NULL),(2,22,NULL,'22_2png.jpg','Push down with the hands and shrug both the shoulders up simultaneously.','','ابّ آپنے ہاتوں کی معداد سے دونو کندھے چحڈ ے۔','రెండు చేతులతో తొడల మీద క్రిందకు నొక్కుతూ రెండు భుజాల గూడులను ఒకేసారి పైకి లేపండి ','கைகளை முழங்காலில் அழுத்திக்கொண்டே  இரு தோள்களையும் ஒரே நேரத்தில் மேலே தூக்கவும்.','',NULL,NULL),(1,23,NULL,'23_1png.jpg','Sitting in a chair, turn the left arm in towards the right leg with left hand facing the floor.','','ایک کرسی پر بیٹھ کر ، بایاں بازو کو دائیں ٹانگ کے تعرف لیجیے ، ہاتھالی نیچے کی تعرف رکھے .','కుర్చీలో కూర్చొని మీ ఎడమ చేతిని కుడి కాలి ఫై ఉంచి , ఎడమ అర చెయ్యి నేల వైపు  వయపు చూసేటట్టు వుంచవలయును. ','நாற்காலியில் உட்கார்ந்து ,இடது கை தரையை பார்க்க வலது முழங்காலின் உள்பக்கம் வைக்கவும்.','',NULL,NULL),(2,23,NULL,'23_2png.jpg','Quickly bring the left arm out and up away from the body, with the left hand opened wide and fingers stretched out.','','جلدی سے بایاں بازو بہار کی تعرف لیجیے آپنے شریر سے . جسمے بائیں ہاتھ کی ہاتھے لی کھول لی لی۔','వేగంగా ఎడమ చేతిని  మరియు చేతి వేళ్లను బాడీ  కి దూరంగా  పైకి చాపి వుంచవలయును ','விரைவில் இடது கையை அகலத்திறந்து ,விரல்களை நீட்டி கொண்டு , உடம்பை விட்டு வெளியே மேலே நீட்டவும்.','',NULL,NULL),(1,24,NULL,'24_1png.jpg','Sit in front of a table, with hand supported on a skate.','','میز کے سامنے بیٹے اور ایک ہاتھ سکیٹ پی رکھ دی .','టేబుల్ ఎదురుగ కుర్చీ లో కూర్చోండి.ఎడమ చేతిని స్కేట్ పైన ఉంచండి ','மேஜையின் முன் அமர்ந்து ,கைகளை உருளை சறுக்கில் வைக்கவும்.','',NULL,NULL),(2,24,NULL,'24_2png.jpg','Slowly push the skate forward on the table, pushing hand forward from the shoulder.','','اب دھیرے سے سکیٹ کو اگے کی تعرف دھکے لی .','స్కేట్ ను నిదానంగా భుజము సాయం తో  ముందుకు నెట్టండి. ','மெதுவாக உருளை சறுக்கை முன்னோக்கி தள்ளிய  படியே,உங்கள்  தோள் மற்றும் கைகளை முன்னே கொண்டு வரவும்., ','',NULL,NULL),(1,25,NULL,'25_1png.jpg','Sit in front of a table, with hand supported on a skate.','','میز کے سامنے بیٹے اور ایک ہاتھ سکیٹ پی رکھ دی .','టేబుల్ ఎదురుగ కుర్చీ లో కూర్చోండి.ఎడమ చేతిని స్కేట్ పైన ఉంచండి ','மேஜையின் முன் அமர்ந்து ,கைகளை உருளை சறுக்கில் வைக்கவும்.','',NULL,NULL),(2,25,NULL,'25_2png.jpg','Slowly bring the skate in towards the body, turning in from the shoulder.','','ابّ دھیرے سے سکیٹ کو اپنی تعرف لا لے ','భుజము కీలు ని లోపలికి  తిప్పుతూ నిదానంగా  స్కేట్ ను మీ వైపు లోపలికి  తీసుకురండి. ','உருளை சறுக்கை மெதுவாக உடம்பை நோக்கி கொண்டு வரவும்.','',NULL,NULL),(3,25,NULL,'25_3png.jpg','Slowly push the skate away to the left, by turning out from the shoulder.','','اب دھیرے سے سکیٹ کو بائیںتعرف  لیجا یے .','భుజము కీలు ని బయటకు   తిప్పుతూ నిదానంగా  స్కేట్ ను బయటకు తొయ్యండి ','தோளில் இருந்து வெளியே திருப்பி,மெதுவாக இடது பக்கம்   உருளை சறுக்கை தள்ளவும்.','',NULL,NULL),(1,26,NULL,'26_1png.jpg','Stand facing a wall. Try to touch the markings on the wall, randomly.\nTry not to shrug the left shoulder while lifting the arm and touching the markings.','','دیوار کی تعرف مہ کرکے کھڈے ہوجای .ابّ دیوار پار بانہ نشان کو چھینے کی کوشیس کرے ایک کے بعد ایک .\n…….محوںڈا نا چا ڈا ہے  ','గోడ కు ఎదురుగ నmుచొని , గోడ మీద వున్న గురుతులను  ఎడమ భుజమును లేపకుండా ఒక్కటి ఒక్కటిగా తాకవలయును. ','சுவரை பார்த்து  நிற்கவும்.தோராயமாக , சுவர் அடையாளங்களை கைகளை தூக்கி தொட முயற்சிக்கவும் .\nசுவர் அடையாளங்களை தொட முயற்சி செய்யும் போது ,கைகளையும் ,இடது தோளை சுருக்க கூடாது.','',NULL,NULL),(1,27,NULL,'27_1png.jpg','Stand with arms next to you.','','آپنے باہوں کو آپنے بگل مے رکھے .','రెండు చేతులని రెండు కాళ్ళ ఇరువయిపుల ఉంచి నిటారుగా నుంచోండి ','கைகளை நேராக வைத்து நிற்கவும்.','',NULL,NULL),(2,27,NULL,'27_2png.jpg','Touch the back of head with left hand.\nTry not to shrug the shoulder or elevate the shoulder blade while attempting to touch.','','اب اپنی سر کے پچھلے ہیسسے کو آپنے بائیں ہاتھا سے چو لے . اس درمیان دھیان رکھے کی اپکا کندھا اوپر نا اٹھے','ఎడమ చేత్తొ తల వెనుక  భుజము భాగం ఫైకి లేవకుండా  తాకవలయును. ','இடது கையால் உங்கள் பின்னந்தலையை தொடவும்.\nபின்னால் தொடும் போது உங்கள் தோள்பட்டையை தூக்கவோ  அல்லது குறுக்கவோ கூடாது.','',NULL,NULL),(3,27,NULL,'27_3png.jpg','Touch the small of the back with the hand opened out.\nGradually move the hand up towards the middle of the back.\n','','اب آپنے ہاتھ کو کامر کے پیچھے لے ہے اور ہاتھلی کو بہار کی تعرف خلا رکھے .\n\n….دھیرے سے اپنا ہاتھ کو اپپر لیجا یے . \n\n\n','అర చేతిని బయటకు చూపిస్తూ చేతితో మీ వీపు వెనక భాగం తాకండి.\nనిదానంగా చేతిని వీపు  పైకి మీ రెక్కలవైపు తీసుకురండి. \n','உங்கள் இடது கையால் முதுகின் கீழ், இடுப்புக்கு சற்று  மேலே கைகளை விரித்து வைத்து தொடவும்.\nமெதுவாக அப்படியே நடு முதுகை தொடவும்.\n\n','',NULL,NULL),(1,28,NULL,'28_1png.jpg','Sit in a chair. With left hand, grasp the support bar of the axillary crutch, palm facing down','','ایک کرسی پر بیٹھ  کر آپنے بائیں ہاتھا سے بیساکھی کو پکاڈ لے ، ہاتھلے کو ظمین کی تعرف رکھے .','ఎడమ చేత్తో యాక్సిలరీ క్రెచ్ యొక్క మెట్టును పట్టుకొని  చేతిని క్రిందికి ఉండేటట్లు  కూర్చోవలయును.','இடது கையை ,உள்ளங்கை தரையை பார்க்க ஊன்று கோலை ஆதரவாக பிடித்து ,நாற்காலியில் உட்காரவும்.','',NULL,NULL),(2,28,NULL,'28_2png.jpg','Gradually bring the crutch out by turning out from the shoulder.','','دھرے سے بیساکھی کو بہار کی تعرف لا یے آپنے کاندھو کی معداد سے .','భుజాన్ని బయటకు తిప్పుతూ నిదానంగా క్రచ్ ని మీ నుంచి బయటకు తొయ్యండి','மெதுவாக தோளை வெளியே திருப்பி , ஊன்றுகோலை  வெளியே கொண்டு வரவும்.','',NULL,NULL),(1,29,NULL,'29_1png.jpg','Stand with the left hand supported on a cane with the elbow straight out.\nHave the cane tilt in towards you.','','آپنے بائیں ہاتھ سے چھڑی کو پکڑے اور اپنی کونی سیدھی رکھے .\nچھڑی کو اپنی تعرف تھودا جھکے رکھے .','నిటారుగా నుంచొని, ఎడమ చేతిని చేతి కర్ర పై ఆసరాగా ఉంచండి\nచేతి  కర్రను మీ వైపు కు  లోపలికి వంచండి. ','இடது கையை,முட்டியை மடக்காமல், கம்பு குச்சியை பிடித்து கொண்டு நிற்கவும்.\nகம்பை உங்களை நோக்கி சற்று சாய்த்து நிற்கவும்.','',NULL,NULL),(2,29,NULL,'29_2png.jpg','Keeping the elbow straight, allow the weight of the cane to drop the shoulder  to the right.','','اپنی کونی سیدھی رکھے ، اور چھڑی کو دائیں طرف جھکا لے .','ఎడమ మోచేతిని నిటారుగా ఉంచుతూ చేతి ని కర్ర బరు   వుతో లోపలికి జార్చండి','முழங்கையை நேராக வைத்து,கம்பை வலது பக்கம் சாய்க்கவும்.','',NULL,NULL),(3,29,NULL,'29_3png.jpg','Keeping the elbow straight bring the cane out away from your body.','','اب کونی کو سیدھا رکھتے ہویے چھڑی کو شریر سے بہار کی تعرف لیجیے .','మోచేతిని తిన్నగా ఉంచుతూ ఎడమ భుజమును బయటకు తిప్పుతూ ఎడమ చేతిని బయటకు తీసుకురండి','முழங்கையை நேராக வைத்து ,கம்பை  உடம்பை விட்டு,இடது பக்கம்  வெளியே தள்ளவும்.','',NULL,NULL),(1,30,NULL,'30_1png.jpg','Stand facing forward with the cane held in both hands,palms facing down to the floor.','','ابّ سیدھا کھڈ جائے اور چھڑی کو دونو ہاتوں سے پکڑے ، ہاتھ ظمین کے تعرف ہونے کہئے .','ఎదురుగ నిలబడి రెండు అరచేతులూ నేలకు చూపుతూ కర్రను పట్టుకోండి ','கம்பை இரு உள்ளங்கை தரையை பார்க்க , கைகளில்  பிடித்து ,நேராக முன்னோக்கி பார்க்கவும்.','',NULL,NULL),(2,30,NULL,'30_2png.jpg','Bend both elbows symmetrically to bring the cane up to the level of chest.','','دونو کو ایک ساتھ موڈے تاکی چھڑی اوپر سینے تک این ..','మీ మోచేతులను  వంచి కర్రను సమాంతరంగా/ ఏకకాలం లో పైకి లేపుతూ ఛాతి  వరకు ఎత్తిపట్టుకోవలయును  ','இரு முழங்கையையும் ஒரே மாதிரி மடக்கி ,கம்பை மார்பு அளவுக்கு உயர்த்தவும்.\n','',NULL,NULL),(1,31,'१)पेशी में खिंचाव:','','','१)पेशी में खिंचाव:','','','','','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `exercise_steps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exercises`
--

DROP TABLE IF EXISTS `exercises`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `exercises` (
  `exercise_id` int(11) NOT NULL AUTO_INCREMENT,
  `exercise` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(516) COLLATE utf8_unicode_ci DEFAULT NULL,
  `conditions` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `condition_id` int(11) DEFAULT NULL,
  `position` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `position_id` int(11) DEFAULT NULL,
  `purpose` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `purpose_id` int(11) DEFAULT NULL,
  `equipment` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `equipment_id` int(11) DEFAULT NULL,
  `muscle` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `muscle_id` int(11) DEFAULT NULL,
  `movement` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `movement_id` int(11) DEFAULT NULL,
  `bodypart` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bodypart_id` int(11) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`exercise_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exercises`
--

LOCK TABLES `exercises` WRITE;
/*!40000 ALTER TABLE `exercises` DISABLE KEYS */;
INSERT INTO `exercises` VALUES (1,'Adductor Stretch','Adductor Stretch','Stroke / Stretches',7,'Supine',9,'Stretches',1,'',10,NULL,2,NULL,1,'Hip',102,NULL,'2016-12-04 21:51:18'),(2,'Sitting in Chair Hamstring Stretch','Sitting in Chair Hamstring Stretch','Stroke / Stretches',7,'Sitting',5,'Stretches',1,'',10,NULL,NULL,NULL,NULL,'Knee',116,NULL,'2016-12-04 17:39:26'),(3,'Hamstring Stretch: Long Sitting','Hamstring Stretch: Long Sitting','Stroke / Stretches',3,'Long Sitting',9,'Stretches',33,'',10,NULL,NULL,NULL,NULL,'Knee',3,NULL,NULL),(4,'Iliotibial Band Stretch with Strap','Iliotibial Band Stretch with Strap','Stroke / Stretches',3,'Supine',9,'Stretches',33,'Strap',10,NULL,NULL,NULL,NULL,'Hip',3,NULL,NULL),(5,'Modified Thomas Stretch/Quadriceps :Supine','Modified Thomas Stretch/Quadriceps :Supine','Stroke / Stretches',3,'Supine',9,'Stretches',33,'High Mat',10,NULL,NULL,NULL,NULL,'Hip',3,NULL,NULL),(6,'Piriformis Stretch/ Sitting in Chair','Piriformis Stretch/ Sitting in Chair','Stroke / Stretches',3,'Sitting',9,'Stretches',33,'Chair',10,NULL,NULL,NULL,NULL,'Hip',3,NULL,NULL),(7,'Seated/ Calf Stretch','Seated/ Calf Stretch','Stroke/ Stretches',3,'Sitting',9,'Stretches',33,'Wheelchair',10,NULL,NULL,NULL,NULL,'Ankle',3,NULL,NULL),(8,'Hip Flexor Stretch','Hip Flexor Stretch','Stroke / Stretches',3,'Supine',9,'Stretches',33,'High Mat',10,NULL,NULL,NULL,NULL,'Hip',3,NULL,'2016-11-24 20:08:59'),(9,'Elbow Flexion/ Active','Elbow Flexion/ Active','Stroke/ Strengthening',3,'Supine',9,'Active Range of Motion',33,'Mat',10,NULL,NULL,NULL,NULL,'Elbow',3,NULL,NULL),(10,'Double Knee to Chest with Physioball','Double Knee to Chest with Physioball','Stroke/ Active Range of Motion',3,'Hook Lying',9,'Active Range of Motion',33,'Exercise Ball',10,NULL,NULL,NULL,NULL,'Hip',3,NULL,NULL),(11,'Supine Hip Abduction','Supine Hip Abduction','Stroke/ Active Range of Motion',3,'Supine',9,'Active Range of Motion',33,'Bed',10,NULL,NULL,NULL,NULL,'Hip',3,NULL,'2016-11-24 20:10:40'),(12,'Supine:Resisted Shoulder Flexion:','Supine:Resisted Shoulder Flexion:','Stroke/ Strengthening',3,'Supine',9,'Strengthening',33,'Resistance Band',10,NULL,NULL,NULL,NULL,'Shoulder',3,NULL,NULL),(13,'Sitting Trunk Rotation with Shoulder Flexion:','Sitting Trunk Rotation with Shoulder Flexion:','Stroke / Active Range of Motion',3,'Sitting',9,'Active Range of Motion',33,'Cane',10,NULL,NULL,NULL,NULL,'Trunk',3,NULL,NULL),(14,'Shoulder Abduction/ External Rotation Assisted with Cane:','Shoulder Abduction/ External Rotation Assisted with Cane:','Stroke/ Active Assisted Range of Motion',3,'Sitting ',9,'Active Assisted Range of Motion',33,'Cane',10,NULL,NULL,NULL,NULL,'Shoulder',3,NULL,NULL),(15,'Shoulder Abduction/ External Rotation Assisted with Cane:','Shoulder Abduction/ External Rotation Assisted with Cane:','Stroke / Active Assisted Range of Motion',3,'Supine',9,'Active Assisted Range of Motion',33,'Cane',10,NULL,NULL,NULL,NULL,'Shoulder',3,NULL,NULL),(16,'Shoulder Flexion with Dowel:','Shoulder Flexion with Dowel:','Stroke/ Active Assisted Range of Motion',3,'Supine',9,'Active Assisted Range of Motion',33,'Cane',10,NULL,NULL,NULL,NULL,'Shoulder',3,NULL,NULL),(17,'Active Assisted Shoulder External Rotation with Dowel:','Active Assisted Shoulder External Rotation with Dowel:','Stroke/ Active Assisted Range of Motion',3,'Supine',9,'Active Assisted Range of Motion',33,'Cane',10,NULL,NULL,NULL,NULL,'Shoulder',3,NULL,NULL),(18,'Active Assisted Shoulder Abduction with Cane:','Active Assisted Shoulder Abduction with Cane:','Stroke/ Active Assisted Range of Motion',3,'Supine',9,'Active Assisted Range of Motion',33,'Cane',10,NULL,NULL,NULL,NULL,'Shoulder',3,NULL,NULL),(19,'Active Assisted Shoulder Abduction with Cane:','Active Assisted Shoulder Abduction with Cane:','Stroke/ Active Assisted Range of Motion',3,'Supine',9,'Active Assisted Range of Motion',33,'Cane',10,NULL,NULL,NULL,NULL,'Shoulder',3,NULL,NULL),(20,'Supine: Active Assisted Shoulder Internal Rotation with Dowel','Supine: Active Assisted Shoulder Internal Rotation with Dowel','Stroke/ Active Assisted Range of Motion',3,'Supine',9,'Active Assisted Range of Motion',33,'Cane',10,NULL,NULL,NULL,NULL,'Shoulder',3,NULL,NULL),(21,'Sitting: Active Assisted Shoulder Flexion','Sitting: Active Assisted Shoulder Flexion','Stroke/ Active Assisted Range of Motion',3,'Sitting',9,'Active Assisted Range of Motion',33,'Cane',10,NULL,NULL,NULL,NULL,'Shoulder',3,NULL,NULL),(22,'Seated: Shoulder Elevation','Seated: Shoulder Elevation','Stroke / Active Range of Motion',3,'Sitting',9,'Active Range of Motion',33,'',10,NULL,NULL,NULL,NULL,'Shoulder',3,NULL,NULL),(23,'Seated PNF Diagonal pattern:','Seated PNF Diagonal pattern:','Stroke / Active Range of Motion',3,'Sitting',9,'Active Movement',33,'',10,NULL,NULL,NULL,NULL,'',3,NULL,NULL),(24,'Seated Shoulder Flexion Assisted with Skate:','Seated Shoulder Flexion Assisted with Skate:','Stroke / Active Assisted Range of Motion',3,'Sitting',9,'Active Assisted Range of Motion',33,'Skate',10,NULL,NULL,NULL,NULL,'Elbow',3,NULL,NULL),(25,'Seated Shoulder Internal/External Rotation Active Assisted with Skate:','Seated Shoulder Internal/External Rotation Active Assisted with Skate:','Stroke / Active Assisted Range of Motion',3,'Sitting',9,'Active Assisted Range of Motion',33,'Skate',10,NULL,NULL,NULL,NULL,'Shoulder',3,NULL,NULL),(26,'Upper Extremity/ Coordination Exercises:','Upper Extremity/ Coordination Exercises:','Stroke / Coordination Exercises',3,'Standing',9,'Upper Extremity Coordination Exercise',33,'Wall',10,NULL,NULL,NULL,NULL,'Arm',3,NULL,NULL),(27,'Shoulder Pectoral Stretch:','Shoulder Pectoral Stretch:','Stroke / Stretches',3,'Standing',9,'Stretching',33,'',10,NULL,NULL,NULL,NULL,'Shoulder',3,NULL,NULL),(28,'Seated Shoulder External Rotation with Crutch:','Seated Shoulder External Rotation with Crutch:','Stroke / Active Range of Motion',3,'Sitting',9,'Active Range of Motion',33,'Axillary Crutch',10,NULL,NULL,NULL,NULL,'Shoulder',3,NULL,NULL),(29,'Active Assisted Shoulder External Rotation with Cane:Standing:','Active Assisted Shoulder External Rotation with Cane:Standing:','Stroke / Active Assisted Range of Motion',3,'Standing',9,'Active Assisted Range of Motion',33,'Cane',10,NULL,NULL,NULL,NULL,'Shoulder',3,NULL,NULL),(30,'Standing: Elbow Flexion:','Standing: Elbow Flexion:','Standing Elbow Flexion',3,'Standing',9,'Active Movement',33,'Cane',10,NULL,NULL,NULL,NULL,'Elbow',3,NULL,NULL),(31,'New Exercise','New Exercise created from UI',NULL,1,NULL,5,NULL,2,NULL,13,NULL,6,NULL,1,NULL,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(32,'new exercise 100','sdasfdsfsdg',NULL,2,NULL,1,NULL,30,NULL,13,NULL,6,NULL,12,NULL,4,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(33,'Exercise Prabhu','new step for testing',NULL,1,NULL,1,NULL,1,NULL,7,NULL,0,NULL,0,NULL,68,'0000-00-00 00:00:00','2016-12-01 09:02:48');
/*!40000 ALTER TABLE `exercises` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movement`
--

DROP TABLE IF EXISTS `movement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movement` (
  `movement_id` int(11) NOT NULL AUTO_INCREMENT,
  `movement` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(516) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  PRIMARY KEY (`movement_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movement`
--

LOCK TABLES `movement` WRITE;
/*!40000 ALTER TABLE `movement` DISABLE KEYS */;
INSERT INTO `movement` VALUES (1,'ABDUCTION','ABDUCTION',0),(2,'ADDUCTION','ADDUCTION',0),(3,'ANTERIOR PELVIC TILT','ANTERIOR PELVIC TILT',0),(4,'DEPRESSION','DEPRESSION',0),(5,'DORSIFLEXION','DORSIFLEXION',0),(6,'DOWNWARD ROTATION','DOWNWARD ROTATION',0),(7,'ELEVATION','ELEVATION',0),(8,'EVERSION','EVERSION',0),(9,'EXTENSION','EXTENSION',0),(10,'EXTERNAL ROTAITON','EXTERNAL ROTAITON',0),(11,'FLEXION','FLEXION',0),(12,'HORIZONTAL ABDUCTION','HORIZONTAL ABDUCTION',0),(13,'HORIZONTAL ADDUCTION','HORIZONTAL ADDUCTION',0),(14,'INTERNAL ROTATION','INTERNAL ROTATION',0),(15,'INVERSION','INVERSION',0),(16,'LATERAL FLEXION','LATERAL FLEXION',0),(17,'LATERAL PELVIT TILT','LATERAL PELVIT TILT',0),(18,'PLANTAR FLEXION','PLANTAR FLEXION',0),(19,'POSTERIOR PELCIT TILT','POSTERIOR PELCIT TILT',0),(20,'PRONATION','PRONATION',0),(21,'PROTRACTION','PROTRACTION',0),(22,'RADIAL DEVIATION','RADIAL DEVIATION',0),(23,'RETRACTION','RETRACTION',0),(24,'ROTATION','ROTATION',0),(25,'SUPINATION','SUPINATION',0),(26,'ULNAR DEVIATION','ULNAR DEVIATION',0),(27,'UPWARD ROTATON','UPWARD ROTATON',0);
/*!40000 ALTER TABLE `movement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `muscle`
--

DROP TABLE IF EXISTS `muscle`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `muscle` (
  `muscle_id` int(11) NOT NULL AUTO_INCREMENT,
  `muscle` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(516) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  PRIMARY KEY (`muscle_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `muscle`
--

LOCK TABLES `muscle` WRITE;
/*!40000 ALTER TABLE `muscle` DISABLE KEYS */;
INSERT INTO `muscle` VALUES (1,'ADDUCTOR LONGUS & BREVIS',NULL,0),(2,'ADDUCTOR MAGNUS',NULL,0),(3,'ANCONEUS',NULL,0),(4,'ANTERIOR DELTOID',NULL,0),(5,'ANTERIOR TIBIALIS',NULL,0),(6,'BICEPS',NULL,0),(7,'BICEPS BRACHII',NULL,0),(8,'BRACHIALIS',NULL,0),(9,'BRACHIORADIALIS',NULL,0),(10,'CORACOBRACHIALIS',NULL,0),(11,'EXTENSOR CARPI RADIALIS LONGUS &BREVIS',NULL,0),(12,'EXTENSOR CARPI ULNARIS',NULL,0),(13,'EXTENSOR HALLUCIS',NULL,0),(14,'FLEXOR CARPI RADIALIS',NULL,0),(15,'FLEXOR CARPI RADIALIS LONGUS & ULNARIS',NULL,0),(16,'FLEXOR CARPI ULNARIS',NULL,0),(17,'GASTROCNEMIUS',NULL,0),(18,'GEMELI',NULL,0),(19,'GLUTEUS MAXIMUS',NULL,0),(20,'GLUTEUS MEDIUS',NULL,0),(21,'GLUTEUS MINIMUS',NULL,0),(22,'HAMSTRING',NULL,0),(23,'HAMSTRINGS',NULL,0),(24,'ILIOPSOAS',NULL,0),(25,'INFRASPINATUS',NULL,0),(26,'LATISSIMUS DORSI',NULL,0),(27,'LEVATOR SCAPULAE',NULL,0),(28,'LOWER TRAPEZIUS',NULL,0),(29,'MIDDLE DELTOID',NULL,0),(30,'MIDDLE TRAPEZIUS',NULL,0),(31,'OBTURATOR INTERNUS & EXTERNUS',NULL,0),(32,'PALAMARIS LONGUS',NULL,0),(33,'PECTINEUS, GRACILIS',NULL,0),(34,'PECTORALIS MAJOR',NULL,0),(35,'PECTORALIS MINOR',NULL,0),(36,'PERONEUS BREVIS',NULL,0),(37,'PERONEUS LONGUS',NULL,0),(38,'PIRIFORMIS',NULL,0),(39,'POSTERIOR DELTOID',NULL,0),(40,'PRONATOR QUADRATUS',NULL,0),(41,'PRONATOR TERES',NULL,0),(42,'QUADRATUS FEMORIS',NULL,0),(43,'QUADRICEPS',NULL,0),(44,'RECTUS FEMORIS',NULL,0),(45,'RHOMBOIDS',NULL,0),(46,'SERRATUS ANTERIOR',NULL,0),(47,'SOLEUS',NULL,0),(48,'SUBSCAPULARIS',NULL,0),(49,'SUPINATOR',NULL,0),(50,'SUPRASPINATUS',NULL,0),(51,'TENSOR FASCIA LATAE',NULL,0),(52,'TERES MAJOR',NULL,0),(53,'TERES MINOR',NULL,0),(54,'TIBIALIS POSTERIOR',NULL,0),(55,'TRICEPS',NULL,0),(56,'UPPER AND LOWER TRAPEZIUS',NULL,0),(57,'UPPPER TRAPEZIUS',NULL,0);
/*!40000 ALTER TABLE `muscle` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patients`
--

DROP TABLE IF EXISTS `patients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patients` (
  `patient_id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `disease` text COLLATE utf8_unicode_ci,
  `DOB` date DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `mobile` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(256) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `clinic_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`patient_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients`
--

LOCK TABLES `patients` WRITE;
/*!40000 ALTER TABLE `patients` DISABLE KEYS */;
INSERT INTO `patients` VALUES (1,'prabhu','asdfg','1982-04-03',1,'8971603099','prabhu3482@gmail.com','asdfgh qwerty zxcvb','0000-00-00 00:00:00','2016-12-27 21:31:25',1);
/*!40000 ALTER TABLE `patients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `patients_history`
--

DROP TABLE IF EXISTS `patients_history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `patients_history` (
  `patient_id` int(11) DEFAULT NULL,
  `comments` text COLLATE utf8_unicode_ci,
  `treated_by` int(11) DEFAULT NULL,
  `treated_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `patients_history`
--

LOCK TABLES `patients_history` WRITE;
/*!40000 ALTER TABLE `patients_history` DISABLE KEYS */;
/*!40000 ALTER TABLE `patients_history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `position_id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(256) NOT NULL,
  `description` varchar(516) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  PRIMARY KEY (`position_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` VALUES (1,'Supine','Supine',0),(2,'Side Lying','Side Lying',0),(3,'Prone','Prone',0),(4,'Quadruped','Quadruped',0),(5,'Sit','Sit',0),(6,'Kneel','Kneel',0),(7,'Half Kneel','Half Kneel',0),(8,'Stand','Stand',0),(9,'Supine','Supine',0);
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purpose`
--

DROP TABLE IF EXISTS `purpose`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purpose` (
  `purpose_id` int(11) NOT NULL AUTO_INCREMENT,
  `purpose` varchar(256) NOT NULL,
  `description` varchar(516) DEFAULT NULL,
  `parent_id` int(11) DEFAULT '0',
  PRIMARY KEY (`purpose_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purpose`
--

LOCK TABLES `purpose` WRITE;
/*!40000 ALTER TABLE `purpose` DISABLE KEYS */;
INSERT INTO `purpose` VALUES (1,'Strengthening','Strengthening',0),(2,'Mobility','Mobility',0),(3,'Stability','Stability',0),(4,'Dynamic Mobility','Dynamic Mobility',0),(5,'Functinal Training','Functinal Training',0),(6,'Caregiver Education/Training','Caregiver Education/Training',0),(7,'Passive Range of Motion','Passive Range of Motion',2),(8,'Active Assisted Range of Motion','Active Assisted Range of Motion',2),(9,'Active Range of Motion','Active Range of Motion',2),(10,'Bed Mobility','Bed Mobility',5),(11,'Sit to Stand','Sit to Stand',5),(12,'Transfers','Transfers',5),(13,'Functional Mobility','Functional Mobility',6),(14,'Passive Range of Motion','Passive Range of Motion',6),(15,'Care giver Assistance with ','Care giver Assistance with ',6),(16,'Supine to Side Lying','Supine to Side Lying',10),(17,'Side Lying to Sit','Side Lying to Sit',10),(18,'Low Pivot','Low Pivot',12),(19,'Stand Pivot','Stand Pivot',12),(20,'Bed Mobility','Bed Mobility',13),(21,'Supine to Side Lying','Supine to Side Lying',13),(22,'Side Lying to Sit','Side Lying to Sit',13),(23,'Sit to Stand','Sit to Stand',13),(24,'Gait Training','Gait Training',13),(25,'Low Pivot','Low Pivot',13),(26,'Stand Pivot','Stand Pivot',13),(27,'Elevations/Stairs','Elevations/Stairs',13),(28,'Core Strengthening','Core Strengthening',15),(29,'Balance Exercises','Balance Exercises',15),(30,'With Transfer Board','With Transfer Board',18),(31,'Without Transfer Board','Without Transfer Board',18),(32,'Without Assistive Device','Without Assistive Device',19),(33,'With Assistive Device','With Assistive Device',19);
/*!40000 ALTER TABLE `purpose` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role_master`
--

DROP TABLE IF EXISTS `role_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role_master` (
  `role_id` int(11) NOT NULL DEFAULT '0',
  `role_name` varchar(256) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role_master`
--

LOCK TABLES `role_master` WRITE;
/*!40000 ALTER TABLE `role_master` DISABLE KEYS */;
INSERT INTO `role_master` VALUES (1,'Admin','2016-11-15 08:51:30','2016-11-15 08:51:30'),(2,'Therapist','2016-11-15 08:51:59','2016-11-15 08:51:59'),(3,'Doctor','2016-11-15 08:52:19','2016-11-15 08:52:19'),(4,'Patient','2016-11-15 08:52:34','2016-11-15 08:52:34'),(5,'Group Admin','2016-11-15 08:54:11','2016-11-15 08:54:11');
/*!40000 ALTER TABLE `role_master` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(256) DEFAULT NULL,
  `password` varchar(256) DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  `email` varchar(256) DEFAULT NULL,
  `phone` varchar(256) DEFAULT NULL,
  `first_name` varchar(256) DEFAULT NULL,
  `last_name` varchar(256) DEFAULT NULL,
  `created_date` datetime DEFAULT NULL,
  `updated_date` datetime DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `clinic_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'prabhu','letmelogin',1,'prabhu3482@gmail.com','8971603099','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 09:16:04',1,NULL),(2,'prabhu2','asdf',1,'prabhu3482@gmail.com','9542939100','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-12-27 22:41:02',2,1),(3,'prabhu3','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-12-27 22:41:34',3,2),(4,'prabhu4','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-12-27 22:43:22',2,1),(5,'prabhu5','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-12-27 22:42:14',5,3),(6,'prabhu6','letmelogin',1,'prabhu3482@gmail.com','8971603099','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-12-27 22:45:03',2,1),(7,'prabhu7','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(8,'prabhu8','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(9,'prabhu9','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(10,'prabhu10','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(11,'prabhu11','zxcv',1,'prabhu3482@gmail.com','8971603099','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(12,'prabhu12','zxcv',1,'arun@gmail.com','123456789','Arun','Kumar','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(13,'prabhu13','letmelogin',1,'prabhu3482@gmail.com','8971603099','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(14,'prabhu14','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(15,'prabhu15','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(16,'prabhu16','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(17,'prabhu17','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(18,'prabhu18','letmelogin',1,'prabhu3482@gmail.com','8971603099','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(19,'prabhu19','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(20,'prabhu20','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(21,'prabhu21','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(22,'prabhu22','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(23,'prabhu23','zxcv',NULL,NULL,NULL,NULL,NULL,'2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(24,'prabhu24','zxcv',NULL,NULL,NULL,NULL,NULL,'2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(25,'prabhu25','zxcv',NULL,NULL,NULL,NULL,NULL,'2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(26,'prabhu26','zxcv',NULL,NULL,NULL,NULL,NULL,'2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(27,'prabhu27','zxcv',NULL,NULL,NULL,NULL,NULL,'2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(28,'prabhu28','letmelogin',1,'prabhu3482@gmail.com','8971603099','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(29,'prabhu29','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(30,'prabhu30','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(31,'prabhu31','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(32,'prabhu32','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(33,'prabhu33','letmelogin',1,'prabhu3482@gmail.com','8971603099','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(34,'prabhu34','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(35,'prabhu35','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(36,'prabhu36','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(37,'prabhu37','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(38,'prabhu38','letmelogin',1,'prabhu3482@gmail.com','8971603099','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(39,'prabhu39','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(40,'prabhu40','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(41,'prabhu41','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(42,'prabhu42','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(43,'prabhu43','letmelogin',1,'prabhu3482@gmail.com','8971603099','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(44,'prabhu44','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(45,'prabhu45','asdf',1,'prabhu3482@gmail.com','prabhu','Prabhakar','Cheripelly','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(46,'prabhu46','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL),(47,'prabhu47','qwer',1,'prabhu3482@gmail.com','prabhu','prfg','asdsdfs','2016-11-15 07:32:44','2016-11-15 07:32:53',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-06  8:46:50
