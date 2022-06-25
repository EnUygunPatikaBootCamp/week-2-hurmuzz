<?php
class  araclar{
      private $plakaNo, $marka, $model, $tekerlekSayisi, $kanakAcikligi;
  public function getPlakaNo($plakaNo){
        echo("Plaka : ".$this->plakaNo = $plakaNo) ;}
    public function getMarka($marka){
        echo("Marka: ".$this->marka = $marka) ;}
    public function getModel($model){
        echo("Model:".$this->model = $model) ;}
    public function getTekerlekSayisi($tekerlekSayisi){
        echo("Kanat Açıklığı: ".$this->kanatAcikligi = $tekerlekSayisi) ;}
    public function getKanatAcikligi($kanakAcikligi){
        echo("Kanat Açıklığı: ".$this->kanatAcikligi = $kanakAcikligi) ;}
}  
class araba extends araclar{
  public function getInfos($plakaNo, $marka, $model, $tekerlekSayisi){
      parent::getPlakaNo($plakaNo);
      parent::getMarka($marka);
      parent::getModel($model);
      parent::getTekerlekSayisi($tekerlekSayisi);}
}    
class motorsiklet extends araclar{
  public function getInfos($plakaNo, $marka, $model, $tekerlekSayisi){
      parent::getPlakaNo($plakaNo);
      parent::getMarka($marka);
      parent::getModel($model);
      parent::getTekerlekSayisi($tekerlekSayisi);}
}   
class ucak extends araclar{
 public function getInfos($marka, $model, $kanakAcikligi){
      parent::getMarka($marka);
      parent::getModel($model);
      parent::getKanatAcikligi($kanakAcikligi);}
}   
$car = new araba;
$cycle = new motorsiklet;
$plane = new ucak;

$car->getInfos("06 ARAC 06\n", "Mercedes\n", "C180\n", "4\n\n") ; 
$cycle->getInfos("06 MOTOR 06\n", "Honda\n", "Forza 750\n", "2\n\n");
$plane->getInfos("Airbus\n", "A380\n", "80m\n\n");
?>
