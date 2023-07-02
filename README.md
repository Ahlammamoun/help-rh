# help-rhphp -S 0.0.0.0:8080 -t public

## composer create-project symfony/website-skeleton app


 mv rh/* rh/.* .    (pour remonter un dossier à la racine)

## composer require --dev symfony/profiler-pack

## bin/console make:entity

## bin/console make:migration

## bin/console d:m:m

## composer require symfony/annotations-pack

## composer require symfony/asset

## bin/console make:controller

## bin/console debug:router

## bin/console doctrine:database:create

## bin/console make:form

## https://symfony.com/doc/current/reference/forms/types.html

## config/packages/twig.yaml
twig:
    form_themes: ['bootstrap_5_layout.htmcomposer recipes l.twig']
## bin/console make:user

## bin/console m:d:d

## bin/console security:encode-password     déprécié

## security:hash-password

## bin/console security:hash-password

//on redirige dans le fichier loginForm après avoir crée un user admin
  public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        if ($targetPath = $this->getTargetPath($request->getSession(), $firewallName)) {
            return new RedirectResponse($targetPath);
        }
        // For example:
        return new RedirectResponse($this->urlGenerator->generate('app_motor_bike_index'));
        //throw new \Exception('TODO: provide a valid redirect inside '.__FILE__);
    }
    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }

## bin/console make:aut

## created: src/Security/LoginFormAuthenticator.php

## updated: config/packages/security.yaml

## created: src/Controller/SecurityController.php

## created: templates/security/login.html.twig

## bin/console make:crud

## composer recipes

## composer require security-csrf

## bin/console make:user

## bin/console security:hash-password

## bin/console make:auth

## bin/console debug:router 

## composer require symfony/validator
