#
# Table structure for table 'tx_atslider_domain_model_record'
#
CREATE TABLE tx_atslider_domain_model_record (

	title varchar(255) DEFAULT '' NOT NULL,
	uri text,
	subtitle text,
	description text,
	image int(11) unsigned NOT NULL default '0',
	sorting int(10) unsigned DEFAULT '0' NOT NULL
);
