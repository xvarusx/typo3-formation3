CREATE TABLE tx_testkeys_domain_model_produit (
	id int(11) NOT NULL DEFAULT '0',
	name varchar(255) NOT NULL DEFAULT '',
	prix double(11,2) NOT NULL DEFAULT '0.00',
	stock int(11) NOT NULL DEFAULT '0',
	description varchar(255) NOT NULL DEFAULT '',
	slug varchar(255) NOT NULL DEFAULT '',
	add_date date DEFAULT NULL,
	update_date date DEFAULT NULL,
	delate_date date DEFAULT NULL,
	category int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_testkeys_domain_model_category (
	id int(11) NOT NULL DEFAULT '0',
	name varchar(255) NOT NULL DEFAULT '',
	description text NOT NULL DEFAULT '',
	created_at date DEFAULT NULL,
	updated_at date DEFAULT NULL,
	delated_at date DEFAULT NULL
);

CREATE TABLE tx_testkeys_produit_category_mm (
	uid_local int(11) unsigned DEFAULT '0' NOT NULL,
	uid_foreign int(11) unsigned DEFAULT '0' NOT NULL,
	sorting int(11) unsigned DEFAULT '0' NOT NULL,
	sorting_foreign int(11) unsigned DEFAULT '0' NOT NULL,

	PRIMARY KEY (uid_local,uid_foreign),
	KEY uid_local (uid_local),
	KEY uid_foreign (uid_foreign)
);
