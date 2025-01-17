4.1 
 google github symfony recipes go to readme.md link to find all recipes available in symfony ecosystem
 composer recipes - to get all the recipes in your repository
 
5.4 https://twig.symfony.com and click Docs to see Twig reference - Tags, Filters, Functions
 syntax twig for comment
 
6.4 parent() - add to a twig block instead replacing it completely

7.2 
 bin/console debug:router - tells every route in our application
 bin/consoile debug:twig - tells us every Twig function, filter or other thing that exists in our app. This is like the Twig docs... except it also includes extra functions and filters that are added to Twig by bundles that we have installed
 
9.1 bin/console debug:container - the list of every service in our app

9.2 php bin/console debug:autowiring - shows us all the services that are autowireable

11.2 
 #[Route('/api/starships/{id<\d+>}')] - only match the route if the wildcard is an integer
 
11.5 prefixing every routes
11.7 triggering 404 page
13.1 composer require symfony/asset-mapper
 php bin/console debug:asset - This shows every asset that's exposed publicly through Asset Mapper.
13.4 composer require symfony/asset
14.1 composer require symfonycasts/tailwind-bundle
14.2 
 php bin/console tailwind:init
 php bin/console tailwind:build -w
14.4 
.symfony.local.yaml
workers:
  tailwind:
    cmd: ['symfony', 'console', 'tailwind:build', '--watch']
make this file to automatically run php bin/console tailwind:build -w when symfony serve is run
16.2 create an enum
16.3 {{ ship.status.value }} to display the value of the enum status in twig template
17.1 smart model methods to extract the value from the enum 
17.5 use match function to get image filename dinamically
18.1 composer require symfony/stimulus-bundle
18.2 data-controller attribute
18.3 data-action attribute
18.5 waiting for the CSS transition to finish before removing the aside section from the page when click close button using stimulus and g a private method in javascript
export default class extends Controller {
  async close() {
    this.element.style.width = 0
    await this.#waitForAnimation()
    this.element.remove()
  }
  
  #waitForAnimation() {
    return Promise.all(
      this.element.getAnimations().map((animation) => animation.finished)
    )
  }
}
19.1 composer require symfony/ux-turbo
    
