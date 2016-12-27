<?php 

/*
 * Author name: Shourya Chowdhury
 * 
 * Description: Get all the categroies id's of the site
 */

$mageFilename = 'app/Mage.php';

require_once $mageFilename;

Mage::init();

$export_file = "allcategories2.csv";
$export = fopen($export_file, 'w') or die("Permissions error.");

$output = "";

 $output = "name,catid,\r\n";

$category = Mage::getModel('catalog/category');
$catTree = $category->getTreeModel()->load();
$catIds = $catTree->getCollection()->getAllIds();
$cats = array();
    if ($catIds){
        foreach ($catIds as $id){
        $cat = Mage::getModel('catalog/category');
        $cat->load($id);
        $cats[$cat->getId()] = $cat->getName();
        
        $output = "";
        
        $output .= $cat->getName().','; // no quote - integer
     $output .= '"'.$cat->getId().'",'; // quotes - string
     $output .= "\r\n"; // add end of line
     //die;
     fwrite($export, $output); // write to the file handle "$export" with the string "$output".
    } 
} 

// Optionally you can use <pre> tag for a neater print

fclose($export); // close the file handle.
