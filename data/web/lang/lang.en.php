<?php
/*
//
//  English language file
//
*/
$lang['footer']['loading'] = "Please wait...";
$lang['header']['restart_sogo'] = 'Restart SOGo';
$lang['footer']['restart_sogo'] = 'Restart SOGo';
$lang['footer']['restart_now'] = 'Restart now';
$lang['footer']['restart_sogo_info'] = 'Some tasks, e.g. adding a domain, require you to restart SOGo to catch changes made in the mailcow UI.<br /><br /><b>Important:</b> A graceful restart may take a while to complete, please wait for it to finish.';
$lang['dkim']['confirm'] = "Are you sure?";
$lang['danger']['dkim_not_found'] = "DKIM key not found";
$lang['danger']['dkim_remove_failed'] = "Cannot remove selected DKIM key";
$lang['danger']['dkim_add_failed'] = "Cannot add given DKIM key";
$lang['danger']['dkim_domain_or_sel_invalid'] = "DKIM domain or selector invalid";
$lang['danger']['dkim_key_length_invalid'] = "DKIM key length invalid";
$lang['success']['dkim_removed'] = "DKIM key has been removed";
$lang['success']['dkim_added'] = "DKIM key has been saved";
$lang['danger']['access_denied'] = "Access denied or invalid form data";
$lang['danger']['whitelist_from_invalid'] = "Whitelist entry invalid";
$lang['danger']['domain_invalid'] = "Domain name is invalid";
$lang['danger']['mailbox_quota_exceeds_domain_quota'] = "Max. quota exceeds domain quota limit";
$lang['danger']['object_is_not_numeric'] = "Value %s is not numeric";
$lang['success']['domain_added'] = "Added domain %s";
$lang['danger']['alias_empty'] = "Alias address must not be empty";
$lang['danger']['last_key'] = 'Last key cannot be deleted';
$lang['danger']['goto_empty'] = "Goto address must not be empty";
$lang['danger']['policy_list_from_exists'] = "A record with given name exists";
$lang['danger']['policy_list_from_invalid'] = "Record has invalid format";
$lang['danger']['whitelist_exists'] = "A whitelist record with that name exists";
$lang['danger']['whitelist_from_invalid'] = "Whitelist record has invalid format";
$lang['danger']['alias_invalid'] = "Alias address is invalid";
$lang['danger']['goto_invalid'] = "Goto address is invalid";
$lang['danger']['alias_domain_invalid'] = "Alias domain is invalid";
$lang['danger']['target_domain_invalid'] = "Goto domain is invalid";
$lang['danger']['object_exists'] = "Object %s already exists";
$lang['danger']['domain_exists'] = "Domain %s already exists";
$lang['danger']['alias_goto_identical'] = "Alias and goto address must not be identical";
$lang['danger']['aliasd_targetd_identical'] = "Alias domain must not be equal to target domain";
$lang['success']['alias_added'] = "Alias address/es has/have been added";
$lang['success']['alias_modified'] = "Changes to alias have been saved";
$lang['success']['aliasd_modified'] = "Changes to alias domain have been saved";
$lang['success']['mailbox_modified'] = "Changes to mailbox %s have been saved";
$lang['success']['resource_modified'] = "Changes to mailbox %s have been saved";
$lang['success']['object_modified'] = "Changes to object %s have been saved";
$lang['success']['msg_size_saved'] = "Message size limit has been set";
$lang['danger']['aliasd_not_found'] = "Alias domain not found";
$lang['danger']['targetd_not_found'] = "Target domain not found";
$lang['danger']['aliasd_exists'] = "Alias domain already exists";
$lang['success']['aliasd_added'] = "Added alias domain %s";
$lang['success']['aliasd_modified'] = "Changes to alias domain %s have been saved";
$lang['success']['domain_modified'] = "Changes to domain %s have been saved";
$lang['success']['domain_admin_modified'] = "Changes to domain administrator %s have been saved";
$lang['success']['domain_admin_added'] = "Domain administrator %s has been added";
$lang['success']['changes_general'] = 'Changes have been saved';
$lang['success']['admin_modified'] = "Changes to administrator have been saved";
$lang['danger']['exit_code_not_null'] = "Error: Exit code was %d";
$lang['danger']['mailbox_not_available'] = "Mailbox not available";
$lang['danger']['username_invalid'] = "Username cannot be used";
$lang['danger']['password_mismatch'] = "Confirmation password is not identical";
$lang['danger']['password_complexity'] = "Password does not meet the policy";
$lang['danger']['password_empty'] = "Password must not be empty";
$lang['danger']['login_failed'] = "Login failed";
$lang['danger']['mailbox_invalid'] = "Mailbox name is invalid";
$lang['danger']['description_invalid'] = 'Resource description is invalid';
$lang['danger']['resource_invalid'] = "Resource name is invalid";
$lang['danger']['mailbox_invalid_suggest'] = 'Mailbox name is invalid, did you mean to type "%s"?';
$lang['danger']['is_alias'] = "%s is already known as an alias address";
$lang['danger']['is_alias_or_mailbox'] = "%s is already known as an alias or a mailbox";
$lang['danger']['is_spam_alias'] = "%s is already known as a spam alias address";
$lang['danger']['quota_not_0_not_numeric'] = "Quota must be numeric and >= 0";
$lang['danger']['domain_not_found'] = "Domain not found.";
$lang['danger']['max_mailbox_exceeded'] = "Max. mailboxes exceeded (%d of %d)";
$lang['danger']['mailbox_quota_exceeded'] = "Quota exceeds the domain limit (max. %d MiB)";
$lang['danger']['mailbox_quota_left_exceeded'] = "Not enough space left (space left: %d MiB)";
$lang['success']['mailbox_added'] = "Mailbox %s has been added";
$lang['success']['resource_added'] = "Resource %s has been added";
$lang['success']['domain_removed'] = "Domain %s has been removed";
$lang['success']['alias_removed'] = "Alias-Adresse %s has been removed";
$lang['success']['alias_domain_removed'] = "Alias domain %s has been removed";
$lang['success']['domain_admin_removed'] = "Domain administrator %s has been removed";
$lang['success']['mailbox_removed'] = "Mailbox %s has been removed";
$lang['success']['eas_reset'] = "ActiveSync devices for user %s were reset";
$lang['success']['resource_removed'] = "Resource %s has been removed";
$lang['danger']['max_quota_in_use'] = "Mailbox quota must be greater or equal to %d MiB";
$lang['danger']['domain_quota_m_in_use'] = "Domain quota must be greater or equal to %s MiB";
$lang['danger']['mailboxes_in_use'] = "Max. mailboxes must be greater or equal to %d";
$lang['danger']['aliases_in_use'] = "Max. aliases must be greater or equal to %d";
$lang['danger']['sender_acl_invalid'] = "Sender ACL value is invalid";
$lang['danger']['domain_not_empty'] = "Cannot remove non-empty domain";
$lang['warning']['spam_alias_temp_error'] = "Temporary error: Cannot add spam alias, please try again later.";
$lang['danger']['spam_alias_max_exceeded'] = "Max. allowed spam alias addresses exceeded";
$lang['danger']['validity_missing'] = 'Please assign a period of validity';
$lang['user']['on'] = "On";
$lang['user']['off'] = "Off";
$lang['user']['messages'] = "messages"; // "123 messages"
$lang['user']['in_use'] = "Used";
$lang['user']['user_change_fn'] = "";
$lang['user']['user_settings'] = 'User settings';
$lang['user']['mailbox_settings'] = 'Mailbox settings';
$lang['user']['mailbox_details'] = 'Mailbox details';
$lang['user']['change_password'] = 'Change password';
$lang['user']['new_password'] = 'New password';
$lang['user']['save_changes'] = 'Save changes';
$lang['user']['password_now'] = 'Current password (confirm changes)';
$lang['user']['new_password_repeat'] = 'Confirmation password (repeat)';
$lang['user']['new_password_description'] = 'Requirement: 6 characters long, letters and numbers.';
$lang['user']['did_you_know'] = '<b>Did you know?</b> You can use tags in your email address ("me+<b>privat</b>@example.com") to move messages to a folder automatically (example: "privat").';
$lang['user']['spam_aliases'] = 'Temporary email aliases';
$lang['user']['alias'] = 'Alias';
$lang['user']['aliases'] = 'Aliases';
$lang['user']['domain_aliases'] = 'Domain alias addresses';
$lang['user']['is_catch_all'] = 'Catch-all for domain/s';
$lang['user']['aliases_also_send_as'] = 'Also allowed to send as user';
$lang['user']['aliases_send_as_all'] = 'Do not check sender access for the following domain(s) and its alias domains';
$lang['user']['alias_create_random'] = 'Generate random alias';
$lang['user']['alias_extend_all'] = 'Extend aliases by 1 hour';
$lang['user']['alias_valid_until'] = 'Valid until';
$lang['user']['alias_remove_all'] = 'Remove all aliases';
$lang['user']['alias_time_left'] = 'Time left';
$lang['user']['alias_full_date'] = 'd.m.Y, H:i:s T';
$lang['user']['syncjob_full_date'] = 'd.m.Y, H:i:s T';
$lang['user']['alias_select_validity'] = 'Period of validity';
$lang['user']['sync_jobs'] = 'Sync jobs';
$lang['user']['hour'] = 'Hour';
$lang['user']['hours'] = 'Hours';
$lang['user']['day'] = 'Day';
$lang['user']['week'] = 'Week';
$lang['user']['weeks'] = 'Weeks';
$lang['user']['spamfilter'] = 'Spam filter';
$lang['user']['spamfilter_wl'] = 'Whitelist';
$lang['user']['spamfilter_wl_desc'] = 'Whitelisted email addresses to <b>never</b> classify as spam. Wildcards maybe used.';
$lang['user']['spamfilter_bl'] = 'Blacklist';
$lang['user']['spamfilter_bl_desc'] = 'Blacklisted email addresses to <b>always</b> classify as spam and reject. Wildcards maybe used.';
$lang['user']['spamfilter_behavior'] = 'Rating';
$lang['user']['spamfilter_table_rule'] = 'Rule';
$lang['user']['spamfilter_table_action'] = 'Action';
$lang['user']['spamfilter_table_empty'] = 'No data to display';
$lang['user']['spamfilter_table_remove'] = 'remove';
$lang['user']['spamfilter_table_add'] = 'Add item';
$lang['user']['spamfilter_default_score'] = 'Spam score:';
$lang['user']['spamfilter_green'] = 'Green: this message is not spam';
$lang['user']['spamfilter_yellow'] = 'Yellow: this message may be spam, will be tagged as spam and moved to your junk folder';
$lang['user']['spamfilter_red'] = 'Red: This message is spam and will be rejected by the server';
$lang['user']['spamfilter_default_score'] = 'Default values:';
$lang['user']['spamfilter_hint'] = 'The first value describes the "low spam score", the second represents the "high spam score".';
$lang['user']['spamfilter_table_domain_policy'] = "n/a (domain policy)";

$lang['user']['tls_policy_warning'] = '<strong>Warning:</strong> If you decide to enforce encrypted mail transfer, you may lose emails.<br />Messages to not satisfy the policy will be bounced with a hard fail by the mail system.';
$lang['user']['tls_policy'] = 'Encryption policy';
$lang['user']['tls_enforce_in'] = 'Enforce TLS incoming';
$lang['user']['tls_enforce_out'] = 'Enforce TLS outgoing';
$lang['user']['no_record'] = 'No record';

$lang['user']['misc_settings'] = 'Other profile settings';
$lang['user']['misc_delete_profile'] = 'Other profile settings';

$lang['user']['tag_handling'] = 'Set handling for tagged mail';
$lang['user']['tag_in_subfolder'] = 'In subfolder';
$lang['user']['tag_in_subject'] = 'In subject';
$lang['user']['tag_help_explain'] = 'In subfolder: a new subfolder named after the tag will be created below INBOX ("INBOX/Facebook").<br />
In subject: the tags name will be prepended to the mails subject, example: "[Facebook] Meine Neuigkeiten".';
$lang['user']['tag_help_example'] = 'Example for a tagged email address: ich<b>+Facebook</b>@example.org';
$lang['user']['eas_reset'] = 'Reset ActiveSync device cache';
$lang['user']['eas_reset_now'] = 'Reset now';
$lang['user']['eas_reset_help'] = 'In many cases a device cache reset will help to recover a broken ActiveSync profile.<br /><b>Attention:</b> All elements will be redownloaded!';

$lang['user']['encryption'] = 'Encyrption';
$lang['user']['username'] = 'Username';
$lang['user']['password'] = 'Password';
$lang['user']['last_run'] = 'Last run';
$lang['user']['excludes'] = 'Excludes';
$lang['user']['interval'] = 'Interval';
$lang['user']['active'] = 'Active';
$lang['user']['action'] = 'Action';
$lang['user']['edit'] = 'Edit';
$lang['user']['remove'] = 'Remove';
$lang['user']['delete_now'] = 'Remove now';
$lang['user']['create_syncjob'] = 'Create new sync job';

$lang['start']['dashboard'] = '%s - dashboard';
$lang['start']['start_rc'] = 'Open Roundcube';
$lang['start']['start_sogo'] = 'Open SOGo';
$lang['start']['mailcow_apps_detail'] = 'Use a mailcow app to access your mails, calendar, contacts and more.';
$lang['start']['mailcow_panel'] = 'Start mailcow UI';
$lang['start']['mailcow_panel_description'] = 'The mailcow UI is available for administrators and mailbox users.';
$lang['start']['mailcow_panel_detail'] = '<b>Domain administrators</b> create, modify or delete mailboxes and aliases, change domains and read further information about their assigned domains.<br />
	<b>Mailbox users</b> are able to create time-limited aliases (spam aliases), change their password and spam filter settings.';
$lang['start']['recommended_config'] = 'Recommended configuration (without ActiveSync)';
$lang['start']['imap_smtp_server'] = 'IMAP- and SMTP server data';
$lang['start']['imap_smtp_server_description'] = 'For the best experience we recommend to use <a href="%s" target="_blank"><b>Mozilla Thunderbird</b></a>.';
$lang['start']['imap_smtp_server_badge'] = 'Read/Write emails';
$lang['start']['imap_smtp_server_auth_info'] = 'Please use your full email address and the PLAIN authentication mechanism.<br />
Your login data will be encrypted by the server-side mandatory encryption.';
$lang['start']['managesieve'] = 'ManageSieve';
$lang['start']['managesieve_badge'] = 'Email filter';
$lang['start']['managesieve_description'] = 'Please use <b>Mozilla Thunderbird</b> with the <a style="text-decoration:none" target="_blank" href="%s"><b>nightly sieve extension</b></a>.<br />Start Thunderbird, open the add-on settings and drop the newly downloaded xpi file into the opened window.<br />The server name is <b>%s</b>, use port <b>4190</b> if you are asked for. The login data match your email login.';
$lang['start']['service'] = 'Service';
$lang['start']['encryption'] = 'Encryption method';
$lang['start']['help'] = 'Show/Hide help panel';
$lang['start']['hostname'] = 'Hostname';
$lang['start']['port'] = 'Port';
$lang['start']['footer'] = '';
$lang['header']['mailcow_settings'] = 'Configuration';
$lang['header']['administration'] = 'Administration';
$lang['header']['mailboxes'] = 'Mailboxes';
$lang['header']['user_settings'] = 'User settings';
$lang['header']['login'] = 'Login';
$lang['header']['logged_in_as_logout'] = 'Logged in as <b>%s</b> (logout)';
$lang['header']['logged_in_as_logout_dual'] = 'Logged in as <b>%s <span class="text-info">[%s]</span></b>';
$lang['header']['locale'] = 'Language';
$lang['mailbox']['domain'] = 'Domain';
$lang['mailbox']['spam_aliases'] = 'Temp. alias';
$lang['mailbox']['multiple_bookings'] = 'Multiple bookings';
$lang['mailbox']['kind'] = 'Kind';
$lang['mailbox']['description'] = 'Description';
$lang['mailbox']['alias'] = 'Alias';
$lang['mailbox']['resource_name'] = 'Resource name';
$lang['mailbox']['aliases'] = 'Aliases';
$lang['mailbox']['domains'] = 'Domains';
$lang['mailbox']['mailboxes'] = 'Mailboxes';
$lang['mailbox']['resources'] = 'Resources';
$lang['mailbox']['mailbox_quota'] = 'Max. size of a mailbox';
$lang['mailbox']['domain_quota'] = 'Quota';
$lang['mailbox']['active'] = 'Active';
$lang['mailbox']['action'] = 'Action';
$lang['mailbox']['ratelimit'] = 'Outgoing rate limit/h';
$lang['mailbox']['backup_mx'] = 'Backup MX';
$lang['mailbox']['domain_aliases'] = 'Domain aliases';
$lang['mailbox']['target_domain'] = 'Target domain';
$lang['mailbox']['target_address'] = 'Goto address';
$lang['mailbox']['username'] = 'Username';
$lang['mailbox']['fname'] = 'Full name';
$lang['mailbox']['filter_table'] = 'Filter table';
$lang['mailbox']['yes'] = '&#10004;';
$lang['mailbox']['no'] = '&#10008;';
$lang['mailbox']['quota'] = 'Quota';
$lang['mailbox']['in_use'] = 'In use (%)';
$lang['mailbox']['msg_num'] = 'Message #';
$lang['mailbox']['remove'] = 'Remove';
$lang['mailbox']['edit'] = 'Edit';
$lang['mailbox']['archive'] = 'Archive';
$lang['mailbox']['no_record'] = 'No record for object %s';
$lang['mailbox']['no_record_single'] = 'No record';
$lang['mailbox']['add_domain'] = 'Add domain';
$lang['mailbox']['add_domain_alias'] = 'Add domain alias';
$lang['mailbox']['add_mailbox'] = 'Add mailbox';
$lang['mailbox']['add_resource'] = 'Add resource';
$lang['mailbox']['add_alias'] = 'Add alias';
$lang['mailbox']['add_domain_record_first'] = 'Please add a domain first';

$lang['info']['no_action'] = 'No action applicable';

$lang['delete']['title'] = 'Remove object';
$lang['delete']['remove_domain_warning'] = '<b>Warning:</b> You are about to remove the domain <b>%s</b>!';
$lang['delete']['remove_syncjob_warning'] = '<b>Warning:</b> You are about to remove a sync job for user <b>%s</b>!';
$lang['delete']['remove_domainalias_warning'] = '<b>Warning:</b> You are about to remove the domain alias <b>%s</b>!';
$lang['delete']['remove_domainadmin_warning'] = '<b>Warning:</b> You are about to remove the domain administrator <b>%s</b>!';
$lang['delete']['remove_alias_warning'] = '<b>Warning:</b> You are about to remove the alias address <b>%s</b>!';
$lang['delete']['remove_mailbox_warning'] = '<b>Warning:</b> You are about to remove the mailbox <b>%s</b>!';
$lang['delete']['remove_mailbox_details'] = 'The mailbox will be <b>purged permanently</b>!';
$lang['delete']['remove_resource_warning'] = '<b>Warning:</b> You are about to remove the resource <b>%s</b>!';
$lang['delete']['remove_resource_details'] = 'The resource will be <b>purged permanently</b>!';
$lang['delete']['remove_domain_details'] = 'This also removes domain aliases.<br /><br /><b>A domain must be empty to be removed.</b>';
$lang['delete']['remove_syncjob_details'] = 'Objects from this sync job will not be pulled from the remote server anymore.';
$lang['delete']['remove_alias_details'] = 'Users will no longer be able to receive mail for or send mail from this address.</b>';
$lang['delete']['remove_button'] = 'Remove';
$lang['delete']['previous'] = 'Previous page';

$lang['edit']['syncjob'] = 'Edit sync job';
$lang['edit']['save'] = 'Save changes';
$lang['edit']['username'] = 'Username';
$lang['edit']['hostname'] = 'Hostname';
$lang['edit']['encryption'] = 'Encryption';
$lang['edit']['maxage'] = 'Maximum age of messages in days that will be polled from remote<br /><small>(0 = ignore age)</small>';
$lang['edit']['subfolder2'] = 'Sync into subfolder on destination<br /><small>(empty = do not use subfolder)</small>';
$lang['edit']['mins_interval'] = 'Interval (min)';
$lang['edit']['exclude'] = 'Exclude objects (regex)';
$lang['edit']['save'] = 'Save changes';
$lang['edit']['archive'] = 'Archive access';
$lang['edit']['max_mailboxes'] = 'Max. possible mailboxes';
$lang['edit']['title'] = 'Edit object';
$lang['edit']['target_address'] = 'Goto address/es <small>(comma-separated)</small>';
$lang['edit']['active'] = 'Active';
$lang['edit']['target_domain'] = 'Target domain';
$lang['edit']['password'] = 'Password';
$lang['edit']['ratelimit'] = 'Outgoing rate limit/h';
$lang['danger']['ratelimt_less_one'] = 'Outgoing rate limit/h must not be less than 1';
$lang['edit']['password_repeat'] = 'Confirmation password (repeat)';
$lang['edit']['domain_admin'] = 'Edit domain administrator';
$lang['edit']['domain'] = 'Edit domain';
$lang['edit']['alias_domain'] = 'Alias domain';
$lang['edit']['edit_alias_domain'] = 'Edit Alias domain';
$lang['edit']['domains'] = 'Domains';
$lang['edit']['destroy'] = 'Manual data input';
$lang['edit']['alias'] = 'Edit alias';
$lang['edit']['mailbox'] = 'Edit mailbox';
$lang['edit']['description'] = 'Description';
$lang['edit']['max_aliases'] = 'Max. aliases';
$lang['edit']['max_quota'] = 'Max. quota per mailbox (MiB)';
$lang['edit']['domain_quota'] = 'Domain quota';
$lang['edit']['backup_mx_options'] = 'Backup MX options';
$lang['edit']['relay_domain'] = 'Relay domain';
$lang['edit']['relay_all'] = 'Relay all recipients';
$lang['edit']['dkim_signature'] = 'DKIM signature';
$lang['edit']['dkim_record_info'] = '<small>Please add a TXT record with the given value to your DNS settings.</small>';
$lang['edit']['relay_all_info'] = '<small>If you choose <b>not</b> to relay all recipients, you will need to add a ("blind") mailbox for every single recipient that should be relayed.</small>';
$lang['edit']['full_name'] = 'Full name';
$lang['edit']['quota_mb'] = 'Quota (MiB)';
$lang['edit']['sender_acl'] = 'Allow to send as';
$lang['edit']['sender_acl_info'] = 'Aliases cannot be deselected.';
$lang['edit']['dkim_txt_name'] = 'TXT record name:';
$lang['edit']['dkim_txt_value'] = 'TXT record value:';
$lang['edit']['previous'] = 'Previous page';
$lang['edit']['unchanged_if_empty'] = 'If unchanged leave blank';
$lang['edit']['dont_check_sender_acl'] = "Disable sender check for domain %s + alias domains";
$lang['edit']['multiple_bookings'] = 'Multiple bookings';
$lang['edit']['kind'] = 'Kind';
$lang['edit']['resource'] = 'Resource';

$lang['add']['syncjob'] = 'Add sync job';
$lang['add']['syncjob_hint'] = 'Be aware that passwords need to be saved plain-text!';
$lang['add']['hostname'] = 'Hostname';
$lang['add']['username'] = 'Username';
$lang['add']['enc_method'] = 'Encryption method';
$lang['add']['mins_interval'] = 'Polling interval (minutes)';
$lang['add']['maxage'] = 'Maximum age of messages that will be polled from remote (0 = ignore age)';
$lang['add']['subfolder2'] = 'Sync into subfolder on destination';
$lang['add']['exclude'] = 'Exclude objects (regex)';
$lang['add']['delete2duplicates'] = 'Delete duplicates on destination';

$lang['add']['title'] = 'Add object';
$lang['add']['domain'] = 'Domain';
$lang['add']['active'] = 'Active';
$lang['add']['multiple_bookings'] = 'Multiple bookings';
$lang['add']['save'] = 'Save changes';
$lang['add']['description'] = 'Description:';
$lang['add']['max_aliases'] = 'Max. possible aliases:';
$lang['add']['resource_name'] = 'Resource name';
$lang['add']['max_mailboxes'] = 'Max. possible mailboxes:';
$lang['add']['mailbox_quota_m'] = 'Max. quota per mailbox (MiB):';
$lang['add']['domain_quota_m'] = 'Total domain quota (MiB):';
$lang['add']['backup_mx_options'] = 'Backup MX options:';
$lang['add']['relay_all'] = 'Relay all recipients';
$lang['add']['relay_domain'] = 'Relay this domain';
$lang['add']['relay_all_info'] = '<small>If you choose <b>not</b> to relay all recipients, you will need to add a ("blind") mailbox for every single recipient that should be relayed.</small>';
$lang['add']['alias'] = 'Alias(es)';
$lang['add']['alias_spf_fail'] = '<b>Note:</b> If your chosen destination address is an external mailbox, the <b>receiving mailserver</b> may reject your message due to an SPF failure.</a>';
$lang['add']['alias_address'] = 'Alias address/es:';
$lang['add']['alias_address_info'] = '<small>Full email address/es or @example.com, to catch all messages for a domain (comma-separated). <b>mailcow domains only</b>.</small>';
$lang['add']['alias_domain_info'] = '<small>Valid domain names only (comma-separated).</small>';
$lang['add']['target_address'] = 'Goto addresses:';
$lang['add']['target_address_info'] = '<small>Full email address/es (comma-separated).</small>';
$lang['add']['alias_domain'] = 'Alias domain';
$lang['add']['select'] = 'Please select...';
$lang['add']['target_domain'] = 'Target domain:';
$lang['add']['mailbox'] = 'Mailbox';
$lang['add']['resource'] = 'Resource';
$lang['add']['kind'] = 'Kind';
$lang['add']['mailbox_username'] = 'Username (left part of an email address):';
$lang['add']['full_name'] = 'Full name:';
$lang['add']['quota_mb'] = 'Quota (MiB):';
$lang['add']['select_domain'] = 'Please select a domain first';
$lang['add']['password'] = 'Password:';
$lang['add']['password_repeat'] = 'Confirmation password (repeat):';
$lang['add']['previous'] = 'Previous page';
$lang['add']['restart_sogo_hint'] = 'You will need to restart the SOGo service container after adding a new domain!';

$lang['login']['title'] = 'Login';
$lang['login']['administration'] = 'Administration';
$lang['login']['administration_details'] = 'Please use your Administrator login to perform administrative tasks.';
$lang['login']['user_settings'] = 'User settings';
$lang['login']['user_settings_details'] = 'Mailbox users can use mailcow UI to change their passwords, create temporary aliases (spam aliases), adjust the spam filter behaviour or import messages from a remote IMAP server.';
$lang['login']['username'] = 'Username';
$lang['login']['password'] = 'Password';
$lang['login']['reset_password'] = 'Reset my password';
$lang['login']['login'] = 'Login';
$lang['login']['previous'] = "Previous page";
$lang['login']['delayed'] = 'Login was delayed by %s seconds.';

$lang['tfa']['tfa'] = "Two-factor authentication";
$lang['tfa']['set_tfa'] = "Set two-factor authentication method";
$lang['tfa']['yubi_otp'] = "Yubico OTP authentication";
$lang['tfa']['key_id'] = "An identifier for your YubiKey";
$lang['tfa']['api_register'] = 'mailcow uses the Yubico Cloud API. Please get an API key for your key <a href="https://upgrade.yubico.com/getapikey/" target="_blank">here</a>';
$lang['tfa']['u2f'] = "U2F authentication";
$lang['tfa']['hotp'] = "HOTP authentication";
$lang['tfa']['totp'] = "TOTP authentication";
$lang['tfa']['none'] = "Deaktiviert";
$lang['tfa']['delete_tfa'] = "Disable TFA";
$lang['tfa']['disable_tfa'] = "Disable TFA until next successful login";
$lang['tfa']['confirm_tfa'] = "Please confirm your one-time password in the below field";
$lang['tfa']['confirm'] = "Confirm";
$lang['tfa']['otp'] = "One-time password";
$lang['tfa']['trash_login'] = "Trash login";
$lang['tfa']['select'] = "Please select";
$lang['tfa']['waiting_usb_auth'] = "<i>Waiting for USB device...</i><br /><br />Please tap the button on your U2F USB device now.";
$lang['tfa']['waiting_usb_register'] = "<i>Waiting for USB device...</i><br /><br />Please enter your password above and confirm your U2F registration by tapping the button on your U2F USB device.";

$lang['admin']['search_domain_da'] = 'Search domains';
$lang['admin']['restrictions'] = 'Postifx Restrictions';
$lang['admin']['rr'] = 'Postifx Recipient Restrictions';
$lang['admin']['sr'] = 'Postifx Sender Restrictions';
$lang['admin']['reset_defaults'] = 'Reset to defaults';
$lang['admin']['sr'] = 'Postifx Sender Restrictions';
$lang['admin']['r_inactive'] = 'Inactive restrictions';
$lang['admin']['r_active'] = 'Active restrictions';
$lang['admin']['r_info'] = 'Greyed out/disabled elements on the list of active restrictions are not known as valid restrictions to mailcow and cannot be moved. Unknown restrictions will be set in order of appearance anyway. <br />You can add new elements in <code>inc/vars.local.inc.php</code> to be able to toggle them.';
$lang['admin']['public_folders'] = 'Public Folders';
$lang['admin']['public_folders_text'] = 'A namespace "Public" is created. Below\'s public folder name indicates the name of the first auto-created mailbox within this namespace.';
$lang['admin']['public_folder_name'] = 'Folder name <small>(alphanumeric)</small>';
$lang['admin']['public_folder_enable'] = 'Enable public folder';
$lang['admin']['public_folder_enable_text'] = 'Toggling this option does not delete mail in any public folder.';
$lang['admin']['public_folder_pusf'] = 'Enable per-user seen flag';
$lang['admin']['public_folder_pusf_text'] = 'A "per-user seen flag"-enabled system will not mark a mail as read for User B, when User A has seen it, but User B did not.';
$lang['admin']['privacy'] = 'Privacy';
$lang['admin']['privacy_text'] = 'This option enables a PCRE table to remove "User-Agent", "X-Enigmail", "X-Mailer", "X-Originating-IP" and replaces "Received: from" headers with localhost/127.0.0.1.';
$lang['admin']['privacy_anon_mail'] = 'Anonymize outgoing mail';
$lang['admin']['dkim_txt_name'] = 'TXT record name:';
$lang['admin']['dkim_txt_value'] = 'TXT record value:';
$lang['admin']['dkim_key_length'] = 'DKIM key length (bits)';
$lang['admin']['dkim_key_valid'] = 'Key valid';
$lang['admin']['dkim_key_unused'] = 'Key unused';
$lang['admin']['dkim_key_missing'] = 'Key missing';
$lang['admin']['dkim_key_hint'] = 'Selector for DKIM keys is always <code>dkim</code>.';
$lang['admin']['previous'] = 'Previous page';
$lang['admin']['quota_mb'] = 'Quota (MiB):';
$lang['admin']['sender_acl'] = 'Allow to send as:';
$lang['admin']['msg_size'] = 'Message size';
$lang['admin']['msg_size_limit'] = 'Message size limit now';
$lang['admin']['msg_size_limit_details'] = 'Applying a new limit will reload Postfix and the webserver.';
$lang['admin']['save'] = 'Save changes';
$lang['admin']['maintenance'] = 'Maintenance and Information';
$lang['admin']['sys_info'] = 'System information';
$lang['admin']['dkim_add_key'] = 'Add DKIM key';
$lang['admin']['dkim_keys'] = 'DKIM keys';
$lang['admin']['add'] = 'Add';
$lang['admin']['configuration'] = 'Configuration';
$lang['admin']['password'] = 'Password';
$lang['admin']['password_repeat'] = 'Confirmation password (repeat)';
$lang['admin']['active'] = 'Active';
$lang['admin']['action'] = 'Action';
$lang['admin']['add_domain_admin'] = 'Add Domain administrator';
$lang['admin']['admin_domains'] = 'Domain assignments';
$lang['admin']['domain_admins'] = 'Domain administrators';
$lang['admin']['username'] = 'Username';
$lang['admin']['edit'] = 'Edit';
$lang['admin']['remove'] = 'Remove';
$lang['admin']['save'] = 'Save changes';
$lang['admin']['admin'] = 'Administrator';
$lang['admin']['admin_details'] = 'Edit administrator details';
$lang['admin']['unchanged_if_empty'] = 'If unchanged leave blank';
$lang['admin']['yes'] = '&#10004;';
$lang['admin']['no'] = '&#10008;';
$lang['admin']['access'] = 'Access';
$lang['admin']['invalid_max_msg_size'] = 'Invalid max. message size';
$lang['admin']['site_not_found'] = 'Cannot locate mailcow site configuration';
$lang['admin']['public_folder_empty'] = 'Public folder name must not be empty';
$lang['admin']['set_rr_failed'] = 'Cannot set Postfix restrictions';
$lang['admin']['no_record'] = 'No record';
?>