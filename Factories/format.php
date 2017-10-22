<?php
  namespace Factories;

  include './Formats/html.php';
  include './Formats/json.php';
  include './Formats/xml.php';
  include './Formats/map.php';
  include './Formats/geo_json.php';

  use \Formats\Html as Html;
  use \Formats\Json as Json;
  use \Formats\Xml as Xml;
  use \Formats\Map as Map;
  use \Formats\GeoJson as GeoJson;

  class Format
  {
    private $type;
    function __construct($type)
    {
      $this->type = $type;
    }

    public function make(){
      switch ($this->type) {
        case 'geoJson':
          return new GeoJson;
          break;
        case 'json':
          return new Json();
          break;
        case 'xml':
          return new Xml();
          break;
        case 'map':
          return new Map();
          break;
        default:
          return new Html();
        
      }
    }
  }
