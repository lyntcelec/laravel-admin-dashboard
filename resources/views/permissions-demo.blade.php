@hasrole('writer')
  <p>You have been assigned the [writer] role.</p>
@else
  <p>You do NOT have the writer role.</p>
@endhasrole

@can('edit articles')
  <p>You have permission to [edit articles].</p>
@else
  <p>Sorry, you may NOT edit articles.</p>
@endcan

<div>{{ Auth::user()->name }}</div>
<div>----------------------</div>
<div>{{ Auth::user() }}</div>
<div>----------------------</div>
<div>{{ Auth::user()->getAllPermissions() }}</div>
<div>----------------------</div>
<div>{{ Auth::user()->getPermissionsViaRoles() }}</div>
<div>----------------------</div>
<div>{{ Auth::user()->hello() }}</div>


<!-- $permissions = $user->getDirectPermissions();
$permissions = $user->getPermissionsViaRoles();
$permissions = $user->getAllPermissions(); -->
