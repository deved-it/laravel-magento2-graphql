# Using the client in your project

You can use the client in the controller or wherever you prefer using dependency injection

## Quickstart

    class CatalogController extends Controller
        {
            public function index(Request $request, Magento2Graphql $gql)
            {
                // return all products with category ID = 6
                return response()->json(return $gql->products(['category' => 6]));
            }
        }

## How it works

`$gql->products()` automatically instantiates the `Deved\Magento2Graphql\Queries\Products` Class and 
sends the query to the Magento 2 API, returning an `Arrayable` and `Jsonable` Object. You can pass this object to your 
response like an Eloquent model.

## Build your queries or mutations

The library is in early development stage and there are only few queries available, but you can easily extend it using your
queries. To do it create a new Class in `App\Magento2Graphql\Queries` extending `Deved\Magento2Graphql\Queries\AbstractQuery`.

#### Example

To better understand this example read this [official documentation page](https://devdocs.magento.com/guides/v2.4/graphql/queries/cms-page.html)

Create the `app/Magento2Graphql/Queries/CmsPage.php` file:

    <?php

    namespace App\Magento2Graphql\Queries;
    
    
    use Deved\Magento2Graphql\Queries\AbstractQuery;
    
    class CmsPage extends AbstractQuery
    {
    public $identifier;
    
        public function setQuery(): void
        {
            $identifier = $this->identifier;
            $query = <<<GQL
            {
              cmsPage(identifier: "$identifier") {
                identifier
                url_key
                title
                content
                content_heading
                page_layout
                meta_title
                meta_description
                meta_keywords
              }
            }
            GQL;
            $this->query = $query;
        }
    }


then you can call your 'CMS Page' query in your controller with `$gql->cmsPage(...)`:

    <?php

    namespace App\Http\Controllers;
    
    use Deved\Magento2Graphql\Magento2Graphql;
    use Deved\Magento2Graphql\Models\Cart;
    use Illuminate\Http\Request;
    
    class TestController extends Controller
    {
        public function index(Magento2Graphql $gql, Request $request)
        {
            $page = $gql->cmsPage(['identifier' => 'no-route']);
            return response()->json($page);
        }
    }

::: tip
Public properties of your Class should be automatically used as query variables.  
In the above example, `public $identifier` is filled by `['identifier' => 'no-route']`
:::

more information on [Magento 2 GraphQL Developer Guide](https://devdocs.magento.com/guides/v2.4/graphql/)

    
