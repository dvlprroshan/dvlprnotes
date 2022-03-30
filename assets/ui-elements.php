<div class="settings-wrapper" data-global='<?php echo $config_json; ?>'>
	<div class="settings-container noselect">
		<div class="settings-topbar-wrapper">
			<span class="settings-title">Settings</span>
			<button type="button" class="close-button">Close</button>
			<button type="button" class="apply-button">Apply</button>
		</div>
		<div class="settings-sidebar-wrapper">
			<div class="settings-sidebar-container">
				<button type="button" class="settings-sidebar-button settings-notes-button">Notes</button>
				<button type="button" class="settings-sidebar-button settings-appearance-button">Appearance</button>
				<button type="button" class="settings-sidebar-button settings-behavior-button">Behavior</button>
				<button type="button" class="settings-sidebar-button settings-actions-button">Actions</button>
				<button type="button" class="settings-sidebar-button settings-account-button">Account</button>
			</div>
		</div>
		<div class="settings-pane settings-notes-pane"></div>
		<div class="settings-pane settings-appearance-pane">
			<div class="settings-section">
				<span class="settings-heading-text">Theme</span>
				<button class="settings-action-button choice blue settings-theme-light-button" data-category="appearance" data-setting="theme" data-choice="light">Light</button>
				<button class="settings-action-button choice blue settings-theme-dark-button" data-category="appearance" data-setting="theme" data-choice="dark">Dark</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Note Icons</span>
				<button class="settings-action-button choice blue settings-note-icons-mono-button" data-category="appearance" data-setting="note-icons" data-choice="monochrome">Monochrome</button>
				<button class="settings-action-button choice blue settings-note-icons-colored-button" data-category="appearance" data-setting="note-icons" data-choice="colored">Colored</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Formatting Buttons</span>
				<button class="settings-action-button choice blue settings-format-circle-button" data-category="appearance" data-setting="formatting-buttons" data-choice="circle">Circle</button>
				<button class="settings-action-button choice blue settings-format-square-button" data-category="appearance" data-setting="formatting-buttons" data-choice="square">Square</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Search Box</span>
				<button class="settings-action-button choice blue settings-search-visible-button" data-category="appearance" data-setting="search-box" data-choice="visible">Visible</button>
				<button class="settings-action-button choice blue settings-search-hidden-button" data-category="appearance" data-setting="search-box" data-choice="hidden">Hidden</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Separators</span>
				<button class="settings-action-button choice blue settings-separators-visible-button" data-category="appearance" data-setting="separators" data-choice="visible">Visible</button>
				<button class="settings-action-button choice blue settings-separators-hidden-button" data-category="appearance" data-setting="separators" data-choice="hidden">Hidden</button>
			</div>
		</div>
		<div class="settings-pane settings-behavior-pane">
			<div class="settings-section">
				<span class="settings-heading-text">Reopen Notes</span>
				<button class="settings-action-button choice blue settings-reopen-notes-auto-button" data-category="behavior" data-setting="reopen-notes" data-choice="automatically">Automatically</button>
				<button class="settings-action-button choice blue settings-reopen-notes-manual-button" data-category="behavior" data-setting="reopen-notes" data-choice="manually">Manually</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Tooltips (Desktop) - Requires Refresh</span>
				<button class="settings-action-button choice blue settings-tooltips-enabled-button" data-category="behavior" data-setting="tooltips" data-choice="enabled">Enabled</button>
				<button class="settings-action-button choice blue settings-tooltips-disabled-button" data-category="behavior" data-setting="tooltips" data-choice="disabled">Disabled</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Default Settings Page</span>
				<button class="settings-action-button choice blue settings-default-notes-button" data-category="behavior" data-setting="default-settings-page" data-choice="notes">Notes</button>
				<button class="settings-action-button choice blue settings-default-appearance-button" data-category="behavior" data-setting="default-settings-page" data-choice="appearance">Appearance</button>
				<button class="settings-action-button choice blue settings-default-behavior-button" data-category="behavior" data-setting="default-settings-page" data-choice="behavior">Behavior</button>
				<button class="settings-action-button choice blue settings-default-actions-button" data-category="behavior" data-setting="default-settings-page" data-choice="actions">Actions</button>
				<button class="settings-action-button choice blue settings-default-account-button" data-category="behavior" data-setting="default-settings-page" data-choice="account">Account</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Notifications</span>
				<button class="settings-action-button choice blue settings-notifications-enabled-button" data-category="behavior" data-setting="notifications" data-choice="enabled">Enabled</button>
				<button class="settings-action-button choice blue settings-notifications-disabled-button" data-category="behavior" data-setting="notifications" data-choice="disabled">Disabled</button>
			</div>
		</div>
		<div class="settings-pane settings-actions-pane">
			<div class="settings-section settings-delete-section">
				<span class="settings-heading-text">Delete All Notes</span>
				<input class="settings-input-field settings-input-password" type="password" placeholder="Account Password...">
				<button class="settings-action-button red settings-delete-all-notes-button">Delete</button>
			</div>
			<div class="settings-section">
				<span class="settings-heading-text">Reset Settings - Refresh Required</span>
				<button class="settings-action-button red settings-reset-preferences-button">Reset</button>
			</div>
		</div>
		<div class="settings-pane settings-account-pane">
			<div class="settings-section settings-username-section">
				<span class="settings-heading-text">Username - Refresh &amp; Login Required</span>
				<input class="settings-input-field settings-input-username" type="text" placeholder="New Username...">
				<input class="settings-input-field settings-input-password" type="password" placeholder="Password...">
				<button class="settings-action-button blue settings-change-username-button">Change Username</button>
			</div>
			<div class="settings-section settings-password-section">
				<span class="settings-heading-text">Password - Refresh &amp; Login Required</span>
				<input class="settings-input-field settings-input-current-password" type="password" placeholder="Current Password...">
				<input class="settings-input-field settings-input-new-password" type="password" placeholder="New Password...">
				<input class="settings-input-field settings-input-repeat-password" type="password" placeholder="Repeat Password...">
				<button class="settings-action-button blue settings-change-password-button">Change Password</button>
			</div>
		</div>
	</div>
</div>
<div class="note-title-edit-wrapper">
	<div class="note-title-edit-container">
		<span class="note-title-edit-text noselect"></span>
		<div class="note-title-edit-title-wrapper">
			<input class="note-title-edit-input" type="text" placeholder="Title..." maxlength="32">
			<div class="note-title-edit-counter-wrapper noselect">
				<span class="note-title-edit-counter">32</span>
			</div>
		</div>
		<div class="note-title-edit-buttons-wrapper noselect">
			<?php echo $close_icon; ?>
			<?php echo $check_icon; ?>
		</div>
	</div>
</div>
<div class="user-confirmation-wrapper">
	<div class="user-confirmation-container">
		<span class="user-confirmation-title noselect"></span>
		<span class="user-confirmation-description noselect"></span>
		<div class="user-confirmation-buttons-wrapper noselect">
			<?php echo $close_icon; ?>
			<?php echo $check_icon; ?>
		</div>
	</div>
</div>
<div class="raw-data-wrapper">
	<div class="raw-data-container">
		<span class="raw-data-title noselect">Raw JSON Data</span>
		<div class="raw-data-content-wrapper">
			<span class="raw-data-content select"></span>
		</div>
		<div class="raw-data-buttons-wrapper noselect">
			<?php echo $close_icon; ?>
		</div>
	</div>
</div>
<div class="notification-area"></div>
<div class="note-lock-wrapper">
	<div class="note-lock-container">
		<span class="note-lock-title noselect"></span>
		<span class="note-lock-description noselect"></span>
		<div class="note-lock-input-wrapper">
			<input class="note-lock-input current-password" type="password">
			<input class="note-lock-input new-password" type="password" placeholder="New Password...">
			<input class="note-lock-input repeat-password" type="password" placeholder="Repeat New Password...">
		</div>
		<div class="note-lock-buttons-wrapper noselect">
			<?php echo $close_icon; ?>
			<?php echo $check_icon; ?>
		</div>
	</div>
</div>
