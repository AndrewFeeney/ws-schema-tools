# SchemaTools
Add schema.org microdata to your wordpress site using shortcodes.

## Shortcodes

Following is a list of Wordpress shortcodes that the plugin provides:

### General Shortcodes

#### [itemscope SchemaGoesHere]

Usage:
> '[itemscope LocalBusiness] Content [/itemscope]
Html equivalent:
> '<div itemscope itemtype="http://schema.org/LocalBusiness"> Content </div>

#### [itemprop]

Usage:
> '[itemprop name] Content [/itemprop]
Html equivalent:
> '<span itemprop="name"> Content </span>

### Specific Shortcodes

#### Schemas

##### [localbusiness]

Usage:
> '[localbusiness "Business Name Goes Here"/]
Html equivalent:
> '<div itemscope itemtype="http://schema.org/LocalBusiness">Business Name Goes Here</div>

#### Itemprops

##### [ip_name]

Usage:
> '[ip_name "Name"/]
Html equivalent:
> '<span itemprop="name"> Name </span>


##### [ip_desc]

##### [ip_address]

