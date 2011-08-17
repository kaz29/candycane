<?php 
/* SVN FILE: $Id$ */
/* App schema generated on: 2011-08-17 10:08:10 : 1313545150*/
class AppSchema extends CakeSchema {
	var $name = 'App';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $attachments = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'container_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'container_type' => array('type' => 'string', 'null' => false, 'length' => 30),
		'filename' => array('type' => 'string', 'null' => false),
		'disk_filename' => array('type' => 'string', 'null' => false),
		'filesize' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'content_type' => array('type' => 'string', 'null' => true),
		'digest' => array('type' => 'string', 'null' => false, 'length' => 40),
		'downloads' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'author_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created_on' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'description' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $auth_sources = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'type' => array('type' => 'string', 'null' => false, 'length' => 30),
		'name' => array('type' => 'string', 'null' => false, 'length' => 60),
		'host' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 60),
		'port' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'account' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'account_password' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 60),
		'base_dn' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'attr_login' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30),
		'attr_firstname' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30),
		'attr_lastname' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30),
		'attr_mail' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 30),
		'onthefly_register' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'tls' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $boards = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false),
		'description' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'position' => array('type' => 'integer', 'null' => true, 'default' => '1'),
		'topics_count' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'messages_count' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'last_message_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'boards_project_id' => array('column' => 'project_id', 'unique' => 0))
	);
	var $changes = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'changeset_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'action' => array('type' => 'string', 'null' => false, 'length' => 1),
		'path' => array('type' => 'string', 'null' => false),
		'from_path' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'from_revision' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'revision' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'branch' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'changesets_changeset_id' => array('column' => 'changeset_id', 'unique' => 0))
	);
	var $changesets = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'repository_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'revision' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'committer' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'committed_on' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'comments' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'commit_date' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'scmid' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'changesets_repos_rev' => array('column' => array('repository_id', 'revision'), 'unique' => 1))
	);
	var $changesets_issues = array(
		'changeset_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'issue_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'indexes' => array('changesets_issues_ids' => array('column' => array('changeset_id', 'issue_id'), 'unique' => 1))
	);
	var $comments = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'commented_type' => array('type' => 'string', 'null' => false, 'length' => 30),
		'commented_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'author_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'comments' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'created_on' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated_on' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $custom_fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'type' => array('type' => 'string', 'null' => false, 'length' => 30),
		'name' => array('type' => 'string', 'null' => false, 'length' => 30),
		'field_format' => array('type' => 'string', 'null' => false, 'length' => 30),
		'possible_values' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'regexp' => array('type' => 'string', 'null' => true),
		'min_length' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'max_length' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'is_required' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'is_for_all' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'is_filter' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'position' => array('type' => 'integer', 'null' => true, 'default' => '1'),
		'searchable' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'default_value' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $custom_fields_projects = array(
		'custom_field_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'indexes' => array()
	);
	var $custom_fields_trackers = array(
		'custom_field_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'tracker_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'indexes' => array()
	);
	var $custom_values = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'customized_type' => array('type' => 'string', 'null' => false, 'length' => 30, 'key' => 'index'),
		'customized_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'custom_field_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'value' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'custom_values_customized' => array('column' => array('customized_type', 'customized_id'), 'unique' => 0))
	);
	var $documents = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'category_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'title' => array('type' => 'string', 'null' => false, 'length' => 60),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'created_on' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'documents_project_id' => array('column' => 'project_id', 'unique' => 0))
	);
	var $enabled_modules = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'enabled_modules_project_id' => array('column' => 'project_id', 'unique' => 0))
	);
	var $enumerations = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'opt' => array('type' => 'string', 'null' => false, 'length' => 4),
		'name' => array('type' => 'string', 'null' => false, 'length' => 30),
		'position' => array('type' => 'integer', 'null' => true, 'default' => '1'),
		'is_default' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $issue_categories = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false, 'length' => 30),
		'assigned_to_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'issue_categories_project_id' => array('column' => 'project_id', 'unique' => 0))
	);
	var $issue_relations = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'issue_from_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'issue_to_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'relation_type' => array('type' => 'string', 'null' => false),
		'delay' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $issue_statuses = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'length' => 30),
		'is_closed' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'is_default' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'position' => array('type' => 'integer', 'null' => true, 'default' => '1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $issues = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tracker_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'subject' => array('type' => 'string', 'null' => false),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'due_date' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'category_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'status_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'assigned_to_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'priority_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'fixed_version_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'author_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'lock_version' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created_on' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'updated_on' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'start_date' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'done_ratio' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'estimated_hours' => array('type' => 'float', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'issues_project_id' => array('column' => 'project_id', 'unique' => 0))
	);
	var $journal_details = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'journal_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'property' => array('type' => 'string', 'null' => false, 'length' => 30),
		'prop_key' => array('type' => 'string', 'null' => false, 'length' => 30),
		'old_value' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'value' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'journal_details_journal_id' => array('column' => 'journal_id', 'unique' => 0))
	);
	var $journals = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'journalized_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'journalized_type' => array('type' => 'string', 'null' => false, 'length' => 30),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'notes' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'created_on' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'journals_journalized_id' => array('column' => array('journalized_id', 'journalized_type'), 'unique' => 0))
	);
	var $members = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'role_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created_on' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'mail_notification' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $news = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'title' => array('type' => 'string', 'null' => false, 'length' => 60),
		'summary' => array('type' => 'string', 'null' => true),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'author_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'created_on' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'comments_count' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'news_project_id' => array('column' => 'project_id', 'unique' => 0))
	);
	var $projects = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'length' => 30),
		'description' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'homepage' => array('type' => 'string', 'null' => true),
		'is_public' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'projects_count' => array('type' => 'integer', 'null' => true, 'default' => '0'),
		'created_on' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'updated_on' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'identifier' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $projects_trackers = array(
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'primary'),
		'tracker_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'indexes' => array('projects_trackers_project_id' => array('column' => 'project_id', 'unique' => 0))
	);
	var $queries = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => false),
		'filters' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'is_public' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'column_names' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $repositories = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'url' => array('type' => 'string', 'null' => false),
		'login' => array('type' => 'string', 'null' => true, 'length' => 60),
		'password' => array('type' => 'string', 'null' => true, 'length' => 60),
		'root_url' => array('type' => 'string', 'null' => true),
		'type' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $roles = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'length' => 30),
		'position' => array('type' => 'integer', 'null' => true, 'default' => '1'),
		'assignable' => array('type' => 'boolean', 'null' => true, 'default' => '1'),
		'builtin' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'permissions' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $settings = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'length' => 30),
		'value' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'updated_on' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $time_entries = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'issue_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'hours' => array('type' => 'float', 'null' => false, 'default' => NULL),
		'comments' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'activity_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'spent_on' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'tyear' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tmonth' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'tweek' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'created_on' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'updated_on' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'time_entries_project_id' => array('column' => 'project_id', 'unique' => 0), 'time_entries_issue_id' => array('column' => 'issue_id', 'unique' => 0))
	);
	var $tokens = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'action' => array('type' => 'string', 'null' => false, 'length' => 30),
		'value' => array('type' => 'string', 'null' => false, 'length' => 40),
		'created_on' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $trackers = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'length' => 30),
		'is_in_chlog' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'position' => array('type' => 'integer', 'null' => true, 'default' => '1'),
		'is_in_roadmap' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $user_preferences = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'others' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'hide_mail' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'time_zone' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'login' => array('type' => 'string', 'null' => false, 'length' => 30),
		'hashed_password' => array('type' => 'string', 'null' => false, 'length' => 40),
		'firstname' => array('type' => 'string', 'null' => false, 'length' => 30),
		'lastname' => array('type' => 'string', 'null' => false, 'length' => 30),
		'mail' => array('type' => 'string', 'null' => false, 'length' => 60),
		'mail_notification' => array('type' => 'boolean', 'null' => false, 'default' => '1'),
		'admin' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '1'),
		'last_login_on' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'language' => array('type' => 'string', 'null' => true, 'length' => 5),
		'auth_source_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created_on' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'updated_on' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'type' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $versions = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false),
		'description' => array('type' => 'string', 'null' => true),
		'effective_date' => array('type' => 'date', 'null' => true, 'default' => NULL),
		'created_on' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'updated_on' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'wiki_page_title' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'versions_project_id' => array('column' => 'project_id', 'unique' => 0))
	);
	var $watchers = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'watchable_type' => array('type' => 'string', 'null' => false),
		'watchable_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'user_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $wiki_content_versions = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'wiki_content_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'page_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'author_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'data' => array('type' => 'binary', 'null' => true, 'default' => NULL),
		'compression' => array('type' => 'string', 'null' => true, 'length' => 6),
		'comments' => array('type' => 'string', 'null' => true),
		'updated_on' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'version' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'wiki_content_versions_wcid' => array('column' => 'wiki_content_id', 'unique' => 0))
	);
	var $wiki_contents = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'page_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'author_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'text' => array('type' => 'text', 'null' => true, 'default' => NULL),
		'comments' => array('type' => 'string', 'null' => true),
		'updated_on' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'version' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'wiki_contents_page_id' => array('column' => 'page_id', 'unique' => 0))
	);
	var $wiki_pages = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'wiki_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'created_on' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'protected' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'parent_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'wiki_pages_wiki_id_title' => array('column' => array('wiki_id', 'title'), 'unique' => 0))
	);
	var $wiki_redirects = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'wiki_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'title' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'redirects_to' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'created_on' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'wiki_redirects_wiki_id_title' => array('column' => array('wiki_id', 'title'), 'unique' => 0))
	);
	var $wikis = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'project_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'start_page' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '1'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'wikis_project_id' => array('column' => 'project_id', 'unique' => 0))
	);
	var $workflows = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'tracker_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'old_status_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'new_status_id' => array('type' => 'integer', 'null' => false, 'default' => '0'),
		'role_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'wkfs_role_tracker_old_status' => array('column' => array('role_id', 'tracker_id', 'old_status_id'), 'unique' => 0))
	);
	var $schema_migrations = array(
		'version' => array('type' => 'string', 'length' => 255, 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'indexes' => array('PRIMARY' => array('column' => 'version', 'unique' => 1))
	);
}
?>