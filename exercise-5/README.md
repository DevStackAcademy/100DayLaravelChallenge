## Objetivo

Seguridad de un sistema mediante las políticas de acceso.

```php
<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller 
{
	// ...

    public function destroy(Post $post) 
    {
        $this->authorize('delete', $post);
        
        // ...
    }
}
```

_En esta clase vemos diferentes alternativas para aplicar dicho objetivo de seguridad_. 

### Youtube

- **[Full Stack - Experience](https://youtube.com/@fullstackexperience?sub_confirmation=1)**