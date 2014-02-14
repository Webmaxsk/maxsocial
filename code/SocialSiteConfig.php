<?php
 
class SocialSiteConfig extends DataExtension {     
	
	private static $db = array(
		"Publisher" => "Varchar(127)",
		"gPlusURL" =>  "Varchar(127)",
		"gPlusButton" => "HTMLVarchar(127)",
		"useOpenGraph" => "Boolean",
		"ogSiteName" => "Varchar(64)",
		"fbAdmins" => "Varchar(127)",
		"fbURL" => "Varchar(127)",
		"twitterURL" => "Varchar(127)",
		"vimeoURL" => "Varchar(127)",
		"youtubeURL" => "Varchar(127)"
	);
	
	private static $has_one = array(
		"ogImage" => "Image"
	);
	  
	public function updateCMSFields(FieldList $fields) {	
		$fields->addFieldToTab("Root.Social", TextField::create("Publisher", "Publisher (g+)"));
		$fields->addFieldToTab("Root.Social", TextField::create("gPlusURL", "Adresa pre Google Plus"));
		$fields->addFieldToTab("Root.Social", TextField::create("gPlusButton", "Google Plus Button")->setDescription("Aby sa button začal zobrazovať, treba uviesť atribúty g+ buttonu, t.j. minimálne veľkosť buttonu v tvare: <strong>data-size=\"tall\"</strong> (small|medium|standard|tall), viac info <a href='https://developers.google.com/+/web/+1button/#tag_parameters' target='_blank'>v g+ dokumentácii</a>.<br>Šablóna musí podporovať vloženie g+ buttonu!"));		
		$fields->addFieldToTab("Root.Social", CheckboxField::create("useOpenGraph", "Pridať Open Graph do hlavičky?"));	
		$fields->addFieldToTab("Root.Social", TextField::create("ogSiteName", "Open Graph - Názov stránky")->setDescription("Ak nezadáte, zobrazí sa Titulok webu, t.j. <strong>".$this->owner->Title."</strong>"));
		$fields->addFieldToTab("Root.Social", UploadField::create("ogImage", "Open Graph obrázok"));	
		$fields->addFieldToTab("Root.Social", TextField::create("fbAdmins", "Facebook admin")->setDescription("Bez zadania Facebook ID sa nevytvorí prepojenie Web &#8596; Facebook. Facebook ID zistíte napr. tu: <a href='http://findmyfacebookid.com/' target='_blank'>findmyfacebookid.com</a>"));		
		$fields->addFieldToTab("Root.Social", TextField::create("fbURL", "Adresa pre Facebook"));
		$fields->addFieldToTab("Root.Social", TextField::create("twitterURL", "Adresa pre Twitter"));	
		$fields->addFieldToTab("Root.Social", TextField::create("vimeoURL", "Adresa pre Vimeo"));	
		$fields->addFieldToTab("Root.Social", TextField::create("youtubeURL", "Adresa pre YouTube"));	
    }
	
}

// EOF
