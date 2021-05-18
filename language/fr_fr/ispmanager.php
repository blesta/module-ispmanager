<?php
/**
 * en_us language for the ispmanager module.
 */
// Basics
$lang['Ispmanager.name'] = 'ISPmanager';
$lang['Ispmanager.description'] = 'ISPmanager provides rich feature set for managing websites, creating users, handling domains, emails, databases, etc.';
$lang['Ispmanager.module_row'] = 'Serveur';
$lang['Ispmanager.module_row_plural'] = 'Serveurs';
$lang['Ispmanager.module_group'] = 'Groupe de Serveur';
$lang['Ispmanager.tab_client_actions'] = 'Actions';

$lang['Ispmanager.add_module_row'] = 'Ajouter un Serveur';
$lang['Ispmanager.add_module_group'] = 'Ajouter un groupe de Serveur';
$lang['Ispmanager.manage.module_rows_title'] = 'Serveurs';
$lang['Ispmanager.manage.module_groups_title'] = 'Groupes de Serveur';
$lang['Ispmanager.manage.module_rows_heading.name'] = 'Nom du Serveur (Label)';
$lang['Ispmanager.manage.module_rows_heading.hostname'] = 'Nom d hote (Hostname)';
$lang['Ispmanager.manage.module_rows_heading.accounts'] = 'Compte';
$lang['Ispmanager.manage.module_rows_heading.options'] = 'Options';
$lang['Ispmanager.manage.module_groups_heading.name'] = 'Nom de groupe';
$lang['Ispmanager.manage.module_groups_heading.Serveurs'] = 'Nombre de serveurs';
$lang['Ispmanager.manage.module_groups_heading.options'] = 'Options';
$lang['Ispmanager.manage.module_rows.count'] = '%1$s / %2$s'; // %1$s is the current number of accounts, %2$s is the total number of accounts available
$lang['Ispmanager.manage.module_rows.edit'] = 'Editer';
$lang['Ispmanager.manage.module_groups.edit'] = 'Editer';
$lang['Ispmanager.manage.module_rows.delete'] = 'Supprimer';
$lang['Ispmanager.manage.module_groups.delete'] = 'Supprimer';
$lang['Ispmanager.manage.module_rows.confirm_delete'] = 'Êtes vous sûr de vouloir supprimer ce Serveur ?';
$lang['Ispmanager.manage.module_groups.confirm_delete'] = 'Êtes vous sûr de vouloir supprimer Groupe de Serveur ?';
$lang['Ispmanager.manage.module_rows_no_results'] = 'Il n y a pas de Serveur.';
$lang['Ispmanager.manage.module_groups_no_results'] = 'Il n y a pas de Groupe de Serveur.';

$lang['Ispmanager.order_options.first'] = 'Premier Serveur Non Complet';
$lang['Ispmanager.order_options.roundrobin'] = 'Répartir uniformément entre les serveurs';

// Add row
$lang['Ispmanager.add_row.box_title'] = 'Ajouter un Serveur ISPmanager';
$lang['Ispmanager.add_row.basic_title'] = 'Options Basiques';
$lang['Ispmanager.add_row.name_servers_title'] = 'Nom du serveur';
$lang['Ispmanager.add_row.notes_title'] = 'Notes';
$lang['Ispmanager.add_row.name_server_btn'] = 'Ajouter d autres nom de Serveur';
$lang['Ispmanager.add_row.name_server_col'] = 'Nom du serveur';
$lang['Ispmanager.add_row.name_server_host_col'] = 'Nom d hote (Hostname)';
$lang['Ispmanager.add_row.name_server'] = 'Nom Serveur %1$s'; // %1$s is the name Serveur number (e.g. 3)
$lang['Ispmanager.add_row.remove_name_server'] = 'Retirer';
$lang['Ispmanager.add_row.add_btn'] = 'Ajouter un Serveur';

$lang['Ispmanager.edit_row.box_title'] = 'Editer le Serveur ISPmanager';
$lang['Ispmanager.edit_row.basic_title'] = 'Option Basique';
$lang['Ispmanager.edit_row.name_servers_title'] = 'Nom des Serveurs';
$lang['Ispmanager.edit_row.notes_title'] = 'Notes';
$lang['Ispmanager.edit_row.name_server_btn'] = 'Ajouter un nom de serveur additionnel';
$lang['Ispmanager.edit_row.name_server_col'] = 'Nom Serveur';
$lang['Ispmanager.edit_row.name_server_host_col'] = 'Nom d hote (Hostname)';
$lang['Ispmanager.edit_row.name_server'] = 'Nom du Serveur %1$s'; // %1$s is the name Serveur number (e.g. 3)
$lang['Ispmanager.edit_row.remove_name_server'] = 'Retirer';
$lang['Ispmanager.edit_row.add_btn'] = 'Editer le Serveur';

$lang['Ispmanager.row_meta.server_name'] = 'Nom du serveur (label)';
$lang['Ispmanager.row_meta.host_name'] = 'Nom d Hote (Hostname)';
$lang['Ispmanager.row_meta.user_name'] = 'Nom d utilisateur';
$lang['Ispmanager.row_meta.password'] = 'Mot de passe';
$lang['Ispmanager.row_meta.use_ssl'] = 'Utiliser une connection SSL (certifié) quand on se connecte à l API (recommandé)';
$lang['Ispmanager.row_meta.account_limit'] = 'Limite de comptes';

// Client actions
$lang['Ispmanager.tab_client_actions.change_password'] = 'Changer le mot de passe';
$lang['Ispmanager.tab_client_actions.field_ispmanager_password'] = 'Mot de passe';
$lang['Ispmanager.tab_client_actions.field_ispmanager_confirm_password'] = 'Confirmer le mot de passe';
$lang['Ispmanager.tab_client_actions.field_password_submit'] = 'Mettre à jour le mot de passe';

// Package fields
$lang['Ispmanager.package_fields.template'] = 'Thème';

// Service fields
$lang['Ispmanager.service_field.domain'] = 'Domaine';
$lang['Ispmanager.service_field.username'] = 'Nom d utilisateur';
$lang['Ispmanager.service_field.password'] = 'Mot de passe';

// Service info
$lang['Ispmanager.service_info.username'] = 'Nom d utilisateur';
$lang['Ispmanager.service_info.password'] = 'Mot de passe';
$lang['Ispmanager.service_info.server'] = 'Serveur';
$lang['Ispmanager.service_info.options'] = 'Options';
$lang['Ispmanager.service_info.option_login'] = 'Se connecter';

// Tooltips
$lang['Ispmanager.service_field.tooltip.domain_edit'] = 'Ce changement n affectera pas ISPmanager, mais changera seulement l enregistrement local dans Blesta.';
$lang['Ispmanager.service_field.tooltip.username_edit'] = 'Ce changement n affectera pas ISPmanager, mais changera seulement l enregistrement local dans Blesta.';
$lang['Ispmanager.service_field.tooltip.username'] = 'Vous pouvez laisser le nom d utilisateur vide pour en générer un automatiquement.';
$lang['Ispmanager.service_field.tooltip.password'] = 'Vous pouvez laisser le nom d utilisateur vide pour en générer un automatiquement.';

// Errors
$lang['Ispmanager.!error.server_name_valid'] = 'Vous devez entrer un nom de serveur (label)';
$lang['Ispmanager.!error.host_name_valid'] = 'Le nom d hote (hostname) semble invalide';
$lang['Ispmanager.!error.user_name_valid'] = 'Le nom d utilisateur semble invalide';
$lang['Ispmanager.!error.password_valid'] = 'Le mot de passe semble invalide';
$lang['Ispmanager.!error.password_valid_connection'] = 'Une connexion avec le Serveur n a pas pu être établie. Veuillez vérifier que le nom d utilisateur et le mot de passe sont corrects.';
$lang['Ispmanager.!error.account_limit_valid'] = 'La limite du compte doit être laissée vide (pour les comptes illimités) ou définie par une valeur entière.';
$lang['Ispmanager.!error.name_servers_valid'] = 'Un ou plusieurs des noms de Serveurs saisis ne sont pas valides.';
$lang['Ispmanager.!error.name_servers_count'] = 'Vous devez définir au moins 2 noms Serveurs.';
$lang['Ispmanager.!error.meta[template].empty'] = 'Un thème est requis';
$lang['Ispmanager.!error.api.internal'] = 'Erreur interne, ou le serveur ne répond pas à la requête.';
$lang['Ispmanager.!error.module_row.missing'] = 'Erreur interne. La ligne du module est indisponible.';

$lang['Ispmanager.!error.ispmanager_domain.format'] = 'Veuillez entrer un nom de domaine valide, exemple : domaine.com.';
$lang['Ispmanager.!error.ispmanager_domain.test'] = "Le nom de domaine ne peux pas commencer par 'test'.";
$lang['Ispmanager.!error.ispmanager_username.format'] = 'Le nom d utilisateur ne doit contenir que des lettres et des chiffres';
$lang['Ispmanager.!error.ispmanager_username.test'] = "Le nom d utilisateur ne doit pas commencer par 'test'.";
$lang['Ispmanager.!error.ispmanager_username.length'] = 'Le nom d utilisateur doit être entre 1 et 16 charactères';
$lang['Ispmanager.!error.ispmanager_password.valid'] = 'Le mot de passe doit contenir plus de 8 charactères';
$lang['Ispmanager.!error.ispmanager_password.matches'] = 'Le mot de passe et la confirmation du mot de passe ne correspondent pas';
