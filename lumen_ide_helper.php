<?php
/**
 * A helper file for Laravel 5, to provide autocomplete information to your IDE
 * Generated for Laravel Lumen (5.1.1) (Laravel Components 5.1.*) on 2015-08-18.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 * @see https://github.com/barryvdh/laravel-ide-helper
 */

namespace {
    exit("This file should not be included, only analyzed by your IDE");

    class App extends \Illuminate\Support\Facades\App{

        /**
         * Get the version number of the application.
         *
         * @return string
         * @static
         */
        public static function version(){
            return \Laravel\Lumen\Application::version();
        }

        /**
         * Get or check the current application environment.
         *
         * @param mixed
         * @return string
         * @static
         */
        public static function environment(){
            return \Laravel\Lumen\Application::environment();
        }

        /**
         * Determine if the application is currently down for maintenance.
         *
         * @return bool
         * @static
         */
        public static function isDownForMaintenance(){
            return \Laravel\Lumen\Application::isDownForMaintenance();
        }

        /**
         * Register all of the configured providers.
         *
         * @return void
         * @static
         */
        public static function registerConfiguredProviders(){
            \Laravel\Lumen\Application::registerConfiguredProviders();
        }

        /**
         * Get the path to the cached "compiled.php" file.
         *
         * @return string
         * @static
         */
        public static function getCachedCompilePath(){
            return \Laravel\Lumen\Application::getCachedCompilePath();
        }

        /**
         * Get the path to the cached services.json file.
         *
         * @return string
         * @static
         */
        public static function getCachedServicesPath(){
            return \Laravel\Lumen\Application::getCachedServicesPath();
        }

        /**
         * Register a service provider with the application.
         *
         * @param \Illuminate\Support\ServiceProvider|string $provider
         * @param array $options
         * @param bool $force
         * @return \Illuminate\Support\ServiceProvider
         * @static
         */
        public static function register($provider, $options = array(), $force = false){
            return \Laravel\Lumen\Application::register($provider, $options, $force);
        }

        /**
         * Register a deferred provider and service.
         *
         * @param string $provider
         * @param string $service
         * @return void
         * @static
         */
        public static function registerDeferredProvider($provider, $service = null){
            \Laravel\Lumen\Application::registerDeferredProvider($provider, $service);
        }

        /**
         * Boot the application's service providers.
         *
         * @return void
         * @static
         */
        public static function boot(){
            \Laravel\Lumen\Application::boot();
        }

        /**
         * Register a new boot listener.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function booting($callback){
            \Laravel\Lumen\Application::booting($callback);
        }

        /**
         * Register a new "booted" listener.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function booted($callback){
            \Laravel\Lumen\Application::booted($callback);
        }

        /**
         * Throw an HttpException with the given data.
         *
         * @param int $code
         * @param string $message
         * @param array $headers
         * @return void
         * @throws \Symfony\Component\HttpKernel\Exception\HttpException
         * @static
         */
        public static function abort($code, $message = '', $headers = array()){
            \Laravel\Lumen\Application::abort($code, $message, $headers);
        }

        /**
         * Resolve the given type from the container.
         *
         * @param string $abstract
         * @param array $parameters
         * @return mixed
         * @static
         */
        public static function make($abstract, $parameters = array()){
            return \Laravel\Lumen\Application::make($abstract, $parameters);
        }

        /**
         * Load a configuration file into the application.
         *
         * @return void
         * @static
         */
        public static function configure($name){
            \Laravel\Lumen\Application::configure($name);
        }

        /**
         * Register the facades for the application.
         *
         * @return void
         * @static
         */
        public static function withFacades(){
            \Laravel\Lumen\Application::withFacades();
        }

        /**
         * Load the Eloquent library for the application.
         *
         * @return void
         * @static
         */
        public static function withEloquent(){
            \Laravel\Lumen\Application::withEloquent();
        }

        /**
         * Register a set of routes with a set of shared attributes.
         *
         * @param array $attributes
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function group($attributes, $callback){
            \Laravel\Lumen\Application::group($attributes, $callback);
        }

        /**
         * Register a route with the application.
         *
         * @param string $uri
         * @param mixed $action
         * @return $this
         * @static
         */
        public static function get($uri, $action){
            return \Laravel\Lumen\Application::get($uri, $action);
        }

        /**
         * Register a route with the application.
         *
         * @param string $uri
         * @param mixed $action
         * @return $this
         * @static
         */
        public static function post($uri, $action){
            return \Laravel\Lumen\Application::post($uri, $action);
        }

        /**
         * Register a route with the application.
         *
         * @param string $uri
         * @param mixed $action
         * @return $this
         * @static
         */
        public static function put($uri, $action){
            return \Laravel\Lumen\Application::put($uri, $action);
        }

        /**
         * Register a route with the application.
         *
         * @param string $uri
         * @param mixed $action
         * @return $this
         * @static
         */
        public static function patch($uri, $action){
            return \Laravel\Lumen\Application::patch($uri, $action);
        }

        /**
         * Register a route with the application.
         *
         * @param string $uri
         * @param mixed $action
         * @return $this
         * @static
         */
        public static function delete($uri, $action){
            return \Laravel\Lumen\Application::delete($uri, $action);
        }

        /**
         * Register a route with the application.
         *
         * @param string $uri
         * @param mixed $action
         * @return $this
         * @static
         */
        public static function options($uri, $action){
            return \Laravel\Lumen\Application::options($uri, $action);
        }

        /**
         * Add a route to the collection.
         *
         * @param string $method
         * @param string $uri
         * @param mixed $action
         * @static
         */
        public static function addRoute($method, $uri, $action){
            return \Laravel\Lumen\Application::addRoute($method, $uri, $action);
        }

        /**
         * Add new middleware to the application.
         *
         * @param array $middleware
         * @return $this
         * @static
         */
        public static function middleware($middleware){
            return \Laravel\Lumen\Application::middleware($middleware);
        }

        /**
         * Define the route middleware for the application.
         *
         * @param array $middleware
         * @return $this
         * @static
         */
        public static function routeMiddleware($middleware){
            return \Laravel\Lumen\Application::routeMiddleware($middleware);
        }

        /**
         * {@inheritdoc}
         *
         * @static
         */
        public static function handle($request, $type = 1, $catch = true){
            return \Laravel\Lumen\Application::handle($request, $type, $catch);
        }

        /**
         * Run the application and send the response.
         *
         * @param \Laravel\Lumen\SymfonyRequest|null $request
         * @return void
         * @static
         */
        public static function run($request = null){
            \Laravel\Lumen\Application::run($request);
        }

        /**
         * Dispatch the incoming request.
         *
         * @param \Laravel\Lumen\SymfonyRequest|null $request
         * @return \Laravel\Lumen\Response
         * @static
         */
        public static function dispatch($request = null){
            return \Laravel\Lumen\Application::dispatch($request);
        }

        /**
         * Set the FastRoute dispatcher instance.
         *
         * @param \FastRoute\Dispatcher $dispatcher
         * @return void
         * @static
         */
        public static function setDispatcher($dispatcher){
            \Laravel\Lumen\Application::setDispatcher($dispatcher);
        }

        /**
         * Prepare the response for sending.
         *
         * @param mixed $response
         * @return \Laravel\Lumen\Response
         * @static
         */
        public static function prepareResponse($response){
            return \Laravel\Lumen\Application::prepareResponse($response);
        }

        /**
         * Get the current HTTP path info.
         *
         * @return string
         * @static
         */
        public static function getPathInfo(){
            return \Laravel\Lumen\Application::getPathInfo();
        }

        /**
         * Get the base path for the application.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function basePath($path = null){
            return \Laravel\Lumen\Application::basePath($path);
        }

        /**
         * Get the storage path for the application.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function storagePath($path = null){
            return \Laravel\Lumen\Application::storagePath($path);
        }

        /**
         * Set a custom storage path for the application.
         *
         * @param string $path
         * @return $this
         * @static
         */
        public static function useStoragePath($path){
            return \Laravel\Lumen\Application::useStoragePath($path);
        }

        /**
         * Get the database path for the application.
         *
         * @return string
         * @static
         */
        public static function databasePath(){
            return \Laravel\Lumen\Application::databasePath();
        }

        /**
         * Set a custom configuration path for the application.
         *
         * @param string $path
         * @return $this
         * @static
         */
        public static function useConfigPath($path){
            return \Laravel\Lumen\Application::useConfigPath($path);
        }

        /**
         * Get the resource path for the application.
         *
         * @param string $path
         * @return string
         * @static
         */
        public static function resourcePath($path = null){
            return \Laravel\Lumen\Application::resourcePath($path);
        }

        /**
         * Set a custom resource path for the application.
         *
         * @param string $path
         * @return $this
         * @static
         */
        public static function useResourcePath($path){
            return \Laravel\Lumen\Application::useResourcePath($path);
        }

        /**
         * Determine if the application is running in the console.
         *
         * @return string
         * @static
         */
        public static function runningInConsole(){
            return \Laravel\Lumen\Application::runningInConsole();
        }

        /**
         * Prepare the application to execute a console command.
         *
         * @return void
         * @static
         */
        public static function prepareForConsoleCommand(){
            \Laravel\Lumen\Application::prepareForConsoleCommand();
        }

        /**
         * Get the raw routes for the application.
         *
         * @return array
         * @static
         */
        public static function getRoutes(){
            return \Laravel\Lumen\Application::getRoutes();
        }

        /**
         * Set the cached routes.
         *
         * @param array $routes
         * @return void
         * @static
         */
        public static function setRoutes($routes){
            \Laravel\Lumen\Application::setRoutes($routes);
        }

        /**
         * Get the HTML from the Lumen welcome screen.
         *
         * @return string
         * @static
         */
        public static function welcome(){
            return \Laravel\Lumen\Application::welcome();
        }

        /**
         * Define a contextual binding.
         *
         * @param string $concrete
         * @return \Illuminate\Contracts\Container\ContextualBindingBuilder
         * @static
         */
        public static function when($concrete){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::when($concrete);
        }

        /**
         * Determine if the given abstract type has been bound.
         *
         * @param string $abstract
         * @return bool
         * @static
         */
        public static function bound($abstract){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::bound($abstract);
        }

        /**
         * Determine if the given abstract type has been resolved.
         *
         * @param string $abstract
         * @return bool
         * @static
         */
        public static function resolved($abstract){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::resolved($abstract);
        }

        /**
         * Determine if a given string is an alias.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function isAlias($name){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::isAlias($name);
        }

        /**
         * Register a binding with the container.
         *
         * @param string|array $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void
         * @static
         */
        public static function bind($abstract, $concrete = null, $shared = false){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::bind($abstract, $concrete, $shared);
        }

        /**
         * Add a contextual binding to the container.
         *
         * @param string $concrete
         * @param string $abstract
         * @param \Closure|string $implementation
         * @static
         */
        public static function addContextualBinding($concrete, $abstract, $implementation){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::addContextualBinding($concrete, $abstract, $implementation);
        }

        /**
         * Register a binding if it hasn't already been registered.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @param bool $shared
         * @return void
         * @static
         */
        public static function bindIf($abstract, $concrete = null, $shared = false){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::bindIf($abstract, $concrete, $shared);
        }

        /**
         * Register a shared binding in the container.
         *
         * @param string $abstract
         * @param \Closure|string|null $concrete
         * @return void
         * @static
         */
        public static function singleton($abstract, $concrete = null){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::singleton($abstract, $concrete);
        }

        /**
         * Wrap a Closure such that it is shared.
         *
         * @param \Closure $closure
         * @return \Closure
         * @static
         */
        public static function share($closure){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::share($closure);
        }

        /**
         * Bind a shared Closure into the container.
         *
         * @param string $abstract
         * @param \Closure $closure
         * @return void
         * @deprecated since version 5.1. Use singleton instead.
         * @static
         */
        public static function bindShared($abstract, $closure){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::bindShared($abstract, $closure);
        }

        /**
         * "Extend" an abstract type in the container.
         *
         * @param string $abstract
         * @param \Closure $closure
         * @return void
         * @throws \InvalidArgumentException
         * @static
         */
        public static function extend($abstract, $closure){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::extend($abstract, $closure);
        }

        /**
         * Register an existing instance as shared in the container.
         *
         * @param string $abstract
         * @param mixed $instance
         * @return void
         * @static
         */
        public static function instance($abstract, $instance){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::instance($abstract, $instance);
        }

        /**
         * Assign a set of tags to a given binding.
         *
         * @param array|string $abstracts
         * @param array|mixed $tags
         * @return void
         * @static
         */
        public static function tag($abstracts, $tags){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::tag($abstracts, $tags);
        }

        /**
         * Resolve all of the bindings for a given tag.
         *
         * @param string $tag
         * @return array
         * @static
         */
        public static function tagged($tag){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::tagged($tag);
        }

        /**
         * Alias a type to a different name.
         *
         * @param string $abstract
         * @param string $alias
         * @return void
         * @static
         */
        public static function alias($abstract, $alias){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::alias($abstract, $alias);
        }

        /**
         * Bind a new callback to an abstract's rebind event.
         *
         * @param string $abstract
         * @param \Closure $callback
         * @return mixed
         * @static
         */
        public static function rebinding($abstract, $callback){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::rebinding($abstract, $callback);
        }

        /**
         * Refresh an instance on the given target and method.
         *
         * @param string $abstract
         * @param mixed $target
         * @param string $method
         * @return mixed
         * @static
         */
        public static function refresh($abstract, $target, $method){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::refresh($abstract, $target, $method);
        }

        /**
         * Wrap the given closure such that its dependencies will be injected when executed.
         *
         * @param \Closure $callback
         * @param array $parameters
         * @return \Closure
         * @static
         */
        public static function wrap($callback, $parameters = array()){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::wrap($callback, $parameters);
        }

        /**
         * Call the given Closure / class@method and inject its dependencies.
         *
         * @param callable|string $callback
         * @param array $parameters
         * @param string|null $defaultMethod
         * @return mixed
         * @static
         */
        public static function call($callback, $parameters = array(), $defaultMethod = null){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::call($callback, $parameters, $defaultMethod);
        }

        /**
         * Instantiate a concrete instance of the given type.
         *
         * @param string $concrete
         * @param array $parameters
         * @return mixed
         * @throws \Illuminate\Contracts\Container\BindingResolutionException
         * @static
         */
        public static function build($concrete, $parameters = array()){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::build($concrete, $parameters);
        }

        /**
         * Register a new resolving callback.
         *
         * @param string $abstract
         * @param \Closure|null $callback
         * @return void
         * @static
         */
        public static function resolving($abstract, $callback = null){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::resolving($abstract, $callback);
        }

        /**
         * Register a new after resolving callback for all types.
         *
         * @param string $abstract
         * @param \Closure|null $callback
         * @return void
         * @static
         */
        public static function afterResolving($abstract, $callback = null){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::afterResolving($abstract, $callback);
        }

        /**
         * Determine if a given type is shared.
         *
         * @param string $abstract
         * @return bool
         * @static
         */
        public static function isShared($abstract){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::isShared($abstract);
        }

        /**
         * Get the container's bindings.
         *
         * @return array
         * @static
         */
        public static function getBindings(){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::getBindings();
        }

        /**
         * Remove a resolved instance from the instance cache.
         *
         * @param string $abstract
         * @return void
         * @static
         */
        public static function forgetInstance($abstract){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::forgetInstance($abstract);
        }

        /**
         * Clear all of the instances from the container.
         *
         * @return void
         * @static
         */
        public static function forgetInstances(){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::forgetInstances();
        }

        /**
         * Flush the container of all bindings and resolved instances.
         *
         * @return void
         * @static
         */
        public static function flush(){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::flush();
        }

        /**
         * Set the globally available instance of the container.
         *
         * @return static
         * @static
         */
        public static function getInstance(){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::getInstance();
        }

        /**
         * Set the shared instance of the container.
         *
         * @param \Illuminate\Contracts\Container\Container $container
         * @return void
         * @static
         */
        public static function setInstance($container){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::setInstance($container);
        }

        /**
         * Determine if a given offset exists.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function offsetExists($key){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::offsetExists($key);
        }

        /**
         * Get the value at a given offset.
         *
         * @param string $key
         * @return mixed
         * @static
         */
        public static function offsetGet($key){
            //Method inherited from \Illuminate\Container\Container
            return \Laravel\Lumen\Application::offsetGet($key);
        }

        /**
         * Set the value at a given offset.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function offsetSet($key, $value){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::offsetSet($key, $value);
        }

        /**
         * Unset the value at a given offset.
         *
         * @param string $key
         * @return void
         * @static
         */
        public static function offsetUnset($key){
            //Method inherited from \Illuminate\Container\Container
            \Laravel\Lumen\Application::offsetUnset($key);
        }

    }


    class Auth extends \Illuminate\Support\Facades\Auth{

        /**
         * Create an instance of the database driver.
         *
         * @return \Illuminate\Auth\Guard
         * @static
         */
        public static function createDatabaseDriver(){
            return \Illuminate\Auth\AuthManager::createDatabaseDriver();
        }

        /**
         * Create an instance of the Eloquent driver.
         *
         * @return \Illuminate\Auth\Guard
         * @static
         */
        public static function createEloquentDriver(){
            return \Illuminate\Auth\AuthManager::createEloquentDriver();
        }

        /**
         * Get the default authentication driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver(){
            return \Illuminate\Auth\AuthManager::getDefaultDriver();
        }

        /**
         * Set the default authentication driver name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name){
            \Illuminate\Auth\AuthManager::setDefaultDriver($name);
        }

        /**
         * Get a driver instance.
         *
         * @param string $driver
         * @return mixed
         * @static
         */
        public static function driver($driver = null){
            //Method inherited from \Illuminate\Support\Manager
            return \Illuminate\Auth\AuthManager::driver($driver);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this
         * @static
         */
        public static function extend($driver, $callback){
            //Method inherited from \Illuminate\Support\Manager
            return \Illuminate\Auth\AuthManager::extend($driver, $callback);
        }

        /**
         * Get all of the created "drivers".
         *
         * @return array
         * @static
         */
        public static function getDrivers(){
            //Method inherited from \Illuminate\Support\Manager
            return \Illuminate\Auth\AuthManager::getDrivers();
        }

        /**
         * Determine if the current user is authenticated.
         *
         * @return bool
         * @static
         */
        public static function check(){
            return \Illuminate\Auth\Guard::check();
        }

        /**
         * Determine if the current user is a guest.
         *
         * @return bool
         * @static
         */
        public static function guest(){
            return \Illuminate\Auth\Guard::guest();
        }

        /**
         * Get the currently authenticated user.
         *
         * @return \App\User|null
         * @static
         */
        public static function user(){
            return \Illuminate\Auth\Guard::user();
        }

        /**
         * Get the ID for the currently authenticated user.
         *
         * @return int|null
         * @static
         */
        public static function id(){
            return \Illuminate\Auth\Guard::id();
        }

        /**
         * Log a user into the application without sessions or cookies.
         *
         * @param array $credentials
         * @return bool
         * @static
         */
        public static function once($credentials = array()){
            return \Illuminate\Auth\Guard::once($credentials);
        }

        /**
         * Validate a user's credentials.
         *
         * @param array $credentials
         * @return bool
         * @static
         */
        public static function validate($credentials = array()){
            return \Illuminate\Auth\Guard::validate($credentials);
        }

        /**
         * Attempt to authenticate using HTTP Basic Auth.
         *
         * @param string $field
         * @return \Symfony\Component\HttpFoundation\Response|null
         * @static
         */
        public static function basic($field = 'email'){
            return \Illuminate\Auth\Guard::basic($field);
        }

        /**
         * Perform a stateless HTTP Basic login attempt.
         *
         * @param string $field
         * @return \Symfony\Component\HttpFoundation\Response|null
         * @static
         */
        public static function onceBasic($field = 'email'){
            return \Illuminate\Auth\Guard::onceBasic($field);
        }

        /**
         * Attempt to authenticate a user using the given credentials.
         *
         * @param array $credentials
         * @param bool $remember
         * @param bool $login
         * @return bool
         * @static
         */
        public static function attempt($credentials = array(), $remember = false, $login = true){
            return \Illuminate\Auth\Guard::attempt($credentials, $remember, $login);
        }

        /**
         * Register an authentication attempt event listener.
         *
         * @param mixed $callback
         * @return void
         * @static
         */
        public static function attempting($callback){
            \Illuminate\Auth\Guard::attempting($callback);
        }

        /**
         * Log a user into the application.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @param bool $remember
         * @return void
         * @static
         */
        public static function login($user, $remember = false){
            \Illuminate\Auth\Guard::login($user, $remember);
        }

        /**
         * Log the given user ID into the application.
         *
         * @param mixed $id
         * @param bool $remember
         * @return \App\User
         * @static
         */
        public static function loginUsingId($id, $remember = false){
            return \Illuminate\Auth\Guard::loginUsingId($id, $remember);
        }

        /**
         * Log the given user ID into the application without sessions or cookies.
         *
         * @param mixed $id
         * @return bool
         * @static
         */
        public static function onceUsingId($id){
            return \Illuminate\Auth\Guard::onceUsingId($id);
        }

        /**
         * Log the user out of the application.
         *
         * @return void
         * @static
         */
        public static function logout(){
            \Illuminate\Auth\Guard::logout();
        }

        /**
         * Get the cookie creator instance used by the guard.
         *
         * @return \Illuminate\Contracts\Cookie\QueueingFactory
         * @throws \RuntimeException
         * @static
         */
        public static function getCookieJar(){
            return \Illuminate\Auth\Guard::getCookieJar();
        }

        /**
         * Set the cookie creator instance used by the guard.
         *
         * @param \Illuminate\Contracts\Cookie\QueueingFactory $cookie
         * @return void
         * @static
         */
        public static function setCookieJar($cookie){
            \Illuminate\Auth\Guard::setCookieJar($cookie);
        }

        /**
         * Get the event dispatcher instance.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher
         * @static
         */
        public static function getDispatcher(){
            return \Illuminate\Auth\Guard::getDispatcher();
        }

        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void
         * @static
         */
        public static function setDispatcher($events){
            \Illuminate\Auth\Guard::setDispatcher($events);
        }

        /**
         * Get the session store used by the guard.
         *
         * @return \Illuminate\Session\Store
         * @static
         */
        public static function getSession(){
            return \Illuminate\Auth\Guard::getSession();
        }

        /**
         * Get the user provider used by the guard.
         *
         * @return \Illuminate\Contracts\Auth\UserProvider
         * @static
         */
        public static function getProvider(){
            return \Illuminate\Auth\Guard::getProvider();
        }

        /**
         * Set the user provider used by the guard.
         *
         * @param \Illuminate\Contracts\Auth\UserProvider $provider
         * @return void
         * @static
         */
        public static function setProvider($provider){
            \Illuminate\Auth\Guard::setProvider($provider);
        }

        /**
         * Return the currently cached user.
         *
         * @return \App\User|null
         * @static
         */
        public static function getUser(){
            return \Illuminate\Auth\Guard::getUser();
        }

        /**
         * Set the current user.
         *
         * @param \Illuminate\Contracts\Auth\Authenticatable $user
         * @return void
         * @static
         */
        public static function setUser($user){
            \Illuminate\Auth\Guard::setUser($user);
        }

        /**
         * Get the current request instance.
         *
         * @return \Symfony\Component\HttpFoundation\Request
         * @static
         */
        public static function getRequest(){
            return \Illuminate\Auth\Guard::getRequest();
        }

        /**
         * Set the current request instance.
         *
         * @param \Symfony\Component\HttpFoundation\Request $request
         * @return $this
         * @static
         */
        public static function setRequest($request){
            return \Illuminate\Auth\Guard::setRequest($request);
        }

        /**
         * Get the last user we attempted to authenticate.
         *
         * @return \App\User
         * @static
         */
        public static function getLastAttempted(){
            return \Illuminate\Auth\Guard::getLastAttempted();
        }

        /**
         * Get a unique identifier for the auth session value.
         *
         * @return string
         * @static
         */
        public static function getName(){
            return \Illuminate\Auth\Guard::getName();
        }

        /**
         * Get the name of the cookie used to store the "recaller".
         *
         * @return string
         * @static
         */
        public static function getRecallerName(){
            return \Illuminate\Auth\Guard::getRecallerName();
        }

        /**
         * Determine if the user was authenticated via "remember me" cookie.
         *
         * @return bool
         * @static
         */
        public static function viaRemember(){
            return \Illuminate\Auth\Guard::viaRemember();
        }

    }


    class Bus extends \Illuminate\Support\Facades\Bus{

        /**
         * Marshal a command and dispatch it to its appropriate handler.
         *
         * @param mixed $command
         * @param array $array
         * @return mixed
         * @static
         */
        public static function dispatchFromArray($command, $array){
            return \Illuminate\Bus\Dispatcher::dispatchFromArray($command, $array);
        }

        /**
         * Marshal a command and dispatch it to its appropriate handler.
         *
         * @param mixed $command
         * @param \ArrayAccess $source
         * @param array $extras
         * @return mixed
         * @static
         */
        public static function dispatchFrom($command, $source, $extras = array()){
            return \Illuminate\Bus\Dispatcher::dispatchFrom($command, $source, $extras);
        }

        /**
         * Dispatch a command to its appropriate handler.
         *
         * @param mixed $command
         * @param \Closure|null $afterResolving
         * @return mixed
         * @static
         */
        public static function dispatch($command, $afterResolving = null){
            return \Illuminate\Bus\Dispatcher::dispatch($command, $afterResolving);
        }

        /**
         * Dispatch a command to its appropriate handler in the current process.
         *
         * @param mixed $command
         * @param \Closure|null $afterResolving
         * @return mixed
         * @static
         */
        public static function dispatchNow($command, $afterResolving = null){
            return \Illuminate\Bus\Dispatcher::dispatchNow($command, $afterResolving);
        }

        /**
         * Dispatch a command to its appropriate handler behind a queue.
         *
         * @param mixed $command
         * @return mixed
         * @throws \RuntimeException
         * @static
         */
        public static function dispatchToQueue($command){
            return \Illuminate\Bus\Dispatcher::dispatchToQueue($command);
        }

        /**
         * Get the handler instance for the given command.
         *
         * @param mixed $command
         * @return mixed
         * @static
         */
        public static function resolveHandler($command){
            return \Illuminate\Bus\Dispatcher::resolveHandler($command);
        }

        /**
         * Get the handler class for the given command.
         *
         * @param mixed $command
         * @return string
         * @static
         */
        public static function getHandlerClass($command){
            return \Illuminate\Bus\Dispatcher::getHandlerClass($command);
        }

        /**
         * Get the handler method for the given command.
         *
         * @param mixed $command
         * @return string
         * @static
         */
        public static function getHandlerMethod($command){
            return \Illuminate\Bus\Dispatcher::getHandlerMethod($command);
        }

        /**
         * Register command-to-handler mappings.
         *
         * @param array $commands
         * @return void
         * @static
         */
        public static function maps($commands){
            \Illuminate\Bus\Dispatcher::maps($commands);
        }

        /**
         * Register a fallback mapper callback.
         *
         * @param \Closure $mapper
         * @return void
         * @static
         */
        public static function mapUsing($mapper){
            \Illuminate\Bus\Dispatcher::mapUsing($mapper);
        }

        /**
         * Map the command to a handler within a given root namespace.
         *
         * @param mixed $command
         * @param string $commandNamespace
         * @param string $handlerNamespace
         * @return string
         * @static
         */
        public static function simpleMapping($command, $commandNamespace, $handlerNamespace){
            return \Illuminate\Bus\Dispatcher::simpleMapping($command, $commandNamespace, $handlerNamespace);
        }

        /**
         * Set the pipes through which commands should be piped before dispatching.
         *
         * @param array $pipes
         * @return $this
         * @static
         */
        public static function pipeThrough($pipes){
            return \Illuminate\Bus\Dispatcher::pipeThrough($pipes);
        }

    }


    class DB extends \Illuminate\Support\Facades\DB{

        /**
         * Get a database connection instance.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static function connection($name = null){
            return \Illuminate\Database\DatabaseManager::connection($name);
        }

        /**
         * Disconnect from the given database and remove from local cache.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function purge($name = null){
            \Illuminate\Database\DatabaseManager::purge($name);
        }

        /**
         * Disconnect from the given database.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function disconnect($name = null){
            \Illuminate\Database\DatabaseManager::disconnect($name);
        }

        /**
         * Reconnect to the given database.
         *
         * @param string $name
         * @return \Illuminate\Database\Connection
         * @static
         */
        public static function reconnect($name = null){
            return \Illuminate\Database\DatabaseManager::reconnect($name);
        }

        /**
         * Get the default connection name.
         *
         * @return string
         * @static
         */
        public static function getDefaultConnection(){
            return \Illuminate\Database\DatabaseManager::getDefaultConnection();
        }

        /**
         * Set the default connection name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultConnection($name){
            \Illuminate\Database\DatabaseManager::setDefaultConnection($name);
        }

        /**
         * Register an extension connection resolver.
         *
         * @param string $name
         * @param callable $resolver
         * @return void
         * @static
         */
        public static function extend($name, $resolver){
            \Illuminate\Database\DatabaseManager::extend($name, $resolver);
        }

        /**
         * Return all of the created connections.
         *
         * @return array
         * @static
         */
        public static function getConnections(){
            return \Illuminate\Database\DatabaseManager::getConnections();
        }

        /**
         * Get a schema builder instance for the connection.
         *
         * @return \Illuminate\Database\Schema\MySqlBuilder
         * @static
         */
        public static function getSchemaBuilder(){
            return \Illuminate\Database\MySqlConnection::getSchemaBuilder();
        }

        /**
         * Set the query grammar to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultQueryGrammar(){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::useDefaultQueryGrammar();
        }

        /**
         * Set the schema grammar to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultSchemaGrammar(){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::useDefaultSchemaGrammar();
        }

        /**
         * Set the query post processor to the default implementation.
         *
         * @return void
         * @static
         */
        public static function useDefaultPostProcessor(){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::useDefaultPostProcessor();
        }

        /**
         * Begin a fluent query against a database table.
         *
         * @param string $table
         * @return \Illuminate\Database\Query\Builder
         * @static
         */
        public static function table($table){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::table($table);
        }

        /**
         * Get a new raw query expression.
         *
         * @param mixed $value
         * @return \Illuminate\Database\Query\Expression
         * @static
         */
        public static function raw($value){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::raw($value);
        }

        /**
         * Run a select statement and return a single result.
         *
         * @param string $query
         * @param array $bindings
         * @return mixed
         * @static
         */
        public static function selectOne($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::selectOne($query, $bindings);
        }

        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return array
         * @static
         */
        public static function selectFromWriteConnection($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::selectFromWriteConnection($query, $bindings);
        }

        /**
         * Run a select statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @param bool $useReadPdo
         * @return array
         * @static
         */
        public static function select($query, $bindings = array(), $useReadPdo = true){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::select($query, $bindings, $useReadPdo);
        }

        /**
         * Run an insert statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return bool
         * @static
         */
        public static function insert($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::insert($query, $bindings);
        }

        /**
         * Run an update statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function update($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::update($query, $bindings);
        }

        /**
         * Run a delete statement against the database.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function delete($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::delete($query, $bindings);
        }

        /**
         * Execute an SQL statement and return the boolean result.
         *
         * @param string $query
         * @param array $bindings
         * @return bool
         * @static
         */
        public static function statement($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::statement($query, $bindings);
        }

        /**
         * Run an SQL statement and get the number of rows affected.
         *
         * @param string $query
         * @param array $bindings
         * @return int
         * @static
         */
        public static function affectingStatement($query, $bindings = array()){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::affectingStatement($query, $bindings);
        }

        /**
         * Run a raw, unprepared query against the PDO connection.
         *
         * @param string $query
         * @return bool
         * @static
         */
        public static function unprepared($query){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::unprepared($query);
        }

        /**
         * Prepare the query bindings for execution.
         *
         * @param array $bindings
         * @return array
         * @static
         */
        public static function prepareBindings($bindings){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::prepareBindings($bindings);
        }

        /**
         * Execute a Closure within a transaction.
         *
         * @param \Closure $callback
         * @return mixed
         * @throws \Throwable
         * @static
         */
        public static function transaction($callback){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::transaction($callback);
        }

        /**
         * Start a new database transaction.
         *
         * @return void
         * @static
         */
        public static function beginTransaction(){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::beginTransaction();
        }

        /**
         * Commit the active database transaction.
         *
         * @return void
         * @static
         */
        public static function commit(){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::commit();
        }

        /**
         * Rollback the active database transaction.
         *
         * @return void
         * @static
         */
        public static function rollBack(){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::rollBack();
        }

        /**
         * Get the number of active transactions.
         *
         * @return int
         * @static
         */
        public static function transactionLevel(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::transactionLevel();
        }

        /**
         * Execute the given callback in "dry run" mode.
         *
         * @param \Closure $callback
         * @return array
         * @static
         */
        public static function pretend($callback){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::pretend($callback);
        }

        /**
         * Log a query in the connection's query log.
         *
         * @param string $query
         * @param array $bindings
         * @param float|null $time
         * @return void
         * @static
         */
        public static function logQuery($query, $bindings, $time = null){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::logQuery($query, $bindings, $time);
        }

        /**
         * Register a database query listener with the connection.
         *
         * @param \Closure $callback
         * @return void
         * @static
         */
        public static function listen($callback){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::listen($callback);
        }

        /**
         * Get a Doctrine Schema Column instance.
         *
         * @param string $table
         * @param string $column
         * @return \Doctrine\DBAL\Schema\Column
         * @static
         */
        public static function getDoctrineColumn($table, $column){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getDoctrineColumn($table, $column);
        }

        /**
         * Get the Doctrine DBAL schema manager for the connection.
         *
         * @return \Doctrine\DBAL\Schema\AbstractSchemaManager
         * @static
         */
        public static function getDoctrineSchemaManager(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getDoctrineSchemaManager();
        }

        /**
         * Get the Doctrine DBAL database connection instance.
         *
         * @return \Doctrine\DBAL\Connection
         * @static
         */
        public static function getDoctrineConnection(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getDoctrineConnection();
        }

        /**
         * Get the current PDO connection.
         *
         * @return \PDO
         * @static
         */
        public static function getPdo(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getPdo();
        }

        /**
         * Get the current PDO connection used for reading.
         *
         * @return \PDO
         * @static
         */
        public static function getReadPdo(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getReadPdo();
        }

        /**
         * Set the PDO connection.
         *
         * @param \PDO|null $pdo
         * @return $this
         * @static
         */
        public static function setPdo($pdo){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::setPdo($pdo);
        }

        /**
         * Set the PDO connection used for reading.
         *
         * @param \PDO|null $pdo
         * @return $this
         * @static
         */
        public static function setReadPdo($pdo){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::setReadPdo($pdo);
        }

        /**
         * Set the reconnect instance on the connection.
         *
         * @param callable $reconnector
         * @return $this
         * @static
         */
        public static function setReconnector($reconnector){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::setReconnector($reconnector);
        }

        /**
         * Get the database connection name.
         *
         * @return string|null
         * @static
         */
        public static function getName(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getName();
        }

        /**
         * Get an option from the configuration options.
         *
         * @param string $option
         * @return mixed
         * @static
         */
        public static function getConfig($option){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getConfig($option);
        }

        /**
         * Get the PDO driver name.
         *
         * @return string
         * @static
         */
        public static function getDriverName(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getDriverName();
        }

        /**
         * Get the query grammar used by the connection.
         *
         * @return \Illuminate\Database\Query\Grammars\Grammar
         * @static
         */
        public static function getQueryGrammar(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getQueryGrammar();
        }

        /**
         * Set the query grammar used by the connection.
         *
         * @param \Illuminate\Database\Query\Grammars\Grammar $grammar
         * @return void
         * @static
         */
        public static function setQueryGrammar($grammar){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::setQueryGrammar($grammar);
        }

        /**
         * Get the schema grammar used by the connection.
         *
         * @return \Illuminate\Database\Schema\Grammars\Grammar
         * @static
         */
        public static function getSchemaGrammar(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getSchemaGrammar();
        }

        /**
         * Set the schema grammar used by the connection.
         *
         * @param \Illuminate\Database\Schema\Grammars\Grammar $grammar
         * @return void
         * @static
         */
        public static function setSchemaGrammar($grammar){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::setSchemaGrammar($grammar);
        }

        /**
         * Get the query post processor used by the connection.
         *
         * @return \Illuminate\Database\Query\Processors\Processor
         * @static
         */
        public static function getPostProcessor(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getPostProcessor();
        }

        /**
         * Set the query post processor used by the connection.
         *
         * @param \Illuminate\Database\Query\Processors\Processor $processor
         * @return void
         * @static
         */
        public static function setPostProcessor($processor){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::setPostProcessor($processor);
        }

        /**
         * Get the event dispatcher used by the connection.
         *
         * @return \Illuminate\Contracts\Events\Dispatcher
         * @static
         */
        public static function getEventDispatcher(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getEventDispatcher();
        }

        /**
         * Set the event dispatcher instance on the connection.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void
         * @static
         */
        public static function setEventDispatcher($events){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::setEventDispatcher($events);
        }

        /**
         * Determine if the connection in a "dry run".
         *
         * @return bool
         * @static
         */
        public static function pretending(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::pretending();
        }

        /**
         * Get the default fetch mode for the connection.
         *
         * @return int
         * @static
         */
        public static function getFetchMode(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getFetchMode();
        }

        /**
         * Set the default fetch mode for the connection.
         *
         * @param int $fetchMode
         * @return int
         * @static
         */
        public static function setFetchMode($fetchMode){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::setFetchMode($fetchMode);
        }

        /**
         * Get the connection query log.
         *
         * @return array
         * @static
         */
        public static function getQueryLog(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getQueryLog();
        }

        /**
         * Clear the query log.
         *
         * @return void
         * @static
         */
        public static function flushQueryLog(){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::flushQueryLog();
        }

        /**
         * Enable the query log on the connection.
         *
         * @return void
         * @static
         */
        public static function enableQueryLog(){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::enableQueryLog();
        }

        /**
         * Disable the query log on the connection.
         *
         * @return void
         * @static
         */
        public static function disableQueryLog(){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::disableQueryLog();
        }

        /**
         * Determine whether we're logging queries.
         *
         * @return bool
         * @static
         */
        public static function logging(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::logging();
        }

        /**
         * Get the name of the connected database.
         *
         * @return string
         * @static
         */
        public static function getDatabaseName(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getDatabaseName();
        }

        /**
         * Set the name of the connected database.
         *
         * @param string $database
         * @return string
         * @static
         */
        public static function setDatabaseName($database){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::setDatabaseName($database);
        }

        /**
         * Get the table prefix for the connection.
         *
         * @return string
         * @static
         */
        public static function getTablePrefix(){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::getTablePrefix();
        }

        /**
         * Set the table prefix in use by the connection.
         *
         * @param string $prefix
         * @return void
         * @static
         */
        public static function setTablePrefix($prefix){
            //Method inherited from \Illuminate\Database\Connection
            \Illuminate\Database\MySqlConnection::setTablePrefix($prefix);
        }

        /**
         * Set the table prefix and return the grammar.
         *
         * @param \Illuminate\Database\Grammar $grammar
         * @return \Illuminate\Database\Grammar
         * @static
         */
        public static function withTablePrefix($grammar){
            //Method inherited from \Illuminate\Database\Connection
            return \Illuminate\Database\MySqlConnection::withTablePrefix($grammar);
        }

    }


    class Cache extends \Illuminate\Support\Facades\Cache{

        /**
         * Get a cache store instance by name.
         *
         * @param string|null $name
         * @return mixed
         * @static
         */
        public static function store($name = null){
            return \Illuminate\Cache\CacheManager::store($name);
        }

        /**
         * Get a cache driver instance.
         *
         * @param string $driver
         * @return mixed
         * @static
         */
        public static function driver($driver = null){
            return \Illuminate\Cache\CacheManager::driver($driver);
        }

        /**
         * Create a new cache repository with the given implementation.
         *
         * @param \Illuminate\Contracts\Cache\Store $store
         * @return \Illuminate\Cache\Repository
         * @static
         */
        public static function repository($store){
            return \Illuminate\Cache\CacheManager::repository($store);
        }

        /**
         * Get the default cache driver name.
         *
         * @return string
         * @static
         */
        public static function getDefaultDriver(){
            return \Illuminate\Cache\CacheManager::getDefaultDriver();
        }

        /**
         * Set the default cache driver name.
         *
         * @param string $name
         * @return void
         * @static
         */
        public static function setDefaultDriver($name){
            \Illuminate\Cache\CacheManager::setDefaultDriver($name);
        }

        /**
         * Register a custom driver creator Closure.
         *
         * @param string $driver
         * @param \Closure $callback
         * @return $this
         * @static
         */
        public static function extend($driver, $callback){
            return \Illuminate\Cache\CacheManager::extend($driver, $callback);
        }

        /**
         * Set the event dispatcher instance.
         *
         * @param \Illuminate\Contracts\Events\Dispatcher $events
         * @return void
         * @static
         */
        public static function setEventDispatcher($events){
            \Illuminate\Cache\Repository::setEventDispatcher($events);
        }

        /**
         * Determine if an item exists in the cache.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function has($key){
            return \Illuminate\Cache\Repository::has($key);
        }

        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function get($key, $default = null){
            return \Illuminate\Cache\Repository::get($key, $default);
        }

        /**
         * Retrieve an item from the cache and delete it.
         *
         * @param string $key
         * @param mixed $default
         * @return mixed
         * @static
         */
        public static function pull($key, $default = null){
            return \Illuminate\Cache\Repository::pull($key, $default);
        }

        /**
         * Store an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTime|int $minutes
         * @return void
         * @static
         */
        public static function put($key, $value, $minutes){
            \Illuminate\Cache\Repository::put($key, $value, $minutes);
        }

        /**
         * Store an item in the cache if the key does not exist.
         *
         * @param string $key
         * @param mixed $value
         * @param \DateTime|int $minutes
         * @return bool
         * @static
         */
        public static function add($key, $value, $minutes){
            return \Illuminate\Cache\Repository::add($key, $value, $minutes);
        }

        /**
         * Store an item in the cache indefinitely.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function forever($key, $value){
            \Illuminate\Cache\Repository::forever($key, $value);
        }

        /**
         * Get an item from the cache, or store the default value.
         *
         * @param string $key
         * @param \DateTime|int $minutes
         * @param \Closure $callback
         * @return mixed
         * @static
         */
        public static function remember($key, $minutes, $callback){
            return \Illuminate\Cache\Repository::remember($key, $minutes, $callback);
        }

        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed
         * @static
         */
        public static function sear($key, $callback){
            return \Illuminate\Cache\Repository::sear($key, $callback);
        }

        /**
         * Get an item from the cache, or store the default value forever.
         *
         * @param string $key
         * @param \Closure $callback
         * @return mixed
         * @static
         */
        public static function rememberForever($key, $callback){
            return \Illuminate\Cache\Repository::rememberForever($key, $callback);
        }

        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function forget($key){
            return \Illuminate\Cache\Repository::forget($key);
        }

        /**
         * Get the default cache time.
         *
         * @return int
         * @static
         */
        public static function getDefaultCacheTime(){
            return \Illuminate\Cache\Repository::getDefaultCacheTime();
        }

        /**
         * Set the default cache time in minutes.
         *
         * @param int $minutes
         * @return void
         * @static
         */
        public static function setDefaultCacheTime($minutes){
            \Illuminate\Cache\Repository::setDefaultCacheTime($minutes);
        }

        /**
         * Get the cache store implementation.
         *
         * @return \Illuminate\Contracts\Cache\Store
         * @static
         */
        public static function getStore(){
            return \Illuminate\Cache\Repository::getStore();
        }

        /**
         * Determine if a cached value exists.
         *
         * @param string $key
         * @return bool
         * @static
         */
        public static function offsetExists($key){
            return \Illuminate\Cache\Repository::offsetExists($key);
        }

        /**
         * Retrieve an item from the cache by key.
         *
         * @param string $key
         * @return mixed
         * @static
         */
        public static function offsetGet($key){
            return \Illuminate\Cache\Repository::offsetGet($key);
        }

        /**
         * Store an item in the cache for the default time.
         *
         * @param string $key
         * @param mixed $value
         * @return void
         * @static
         */
        public static function offsetSet($key, $value){
            \Illuminate\Cache\Repository::offsetSet($key, $value);
        }

        /**
         * Remove an item from the cache.
         *
         * @param string $key
         * @return void
         * @static
         */
        public static function offsetUnset($key){
            \Illuminate\Cache\Repository::offsetUnset($key);
        }

        /**
         * Register a custom macro.
         *
         * @param string $name
         * @param callable $macro
         * @return void
         * @static
         */
        public static function macro($name, $macro){
            \Illuminate\Cache\Repository::macro($name, $macro);
        }

        /**
         * Checks if macro is registered.
         *
         * @param string $name
         * @return bool
         * @static
         */
        public static function hasMacro($name){
            return \Illuminate\Cache\Repository::hasMacro($name);
        }

        /**
         * Dynamically handle calls to the class.
         *
         * @param string $method
         * @param array $parameters
         * @return mixed
         * @throws \BadMethodCallException
         * @static
         */
        public static function macroCall($method, $parameters){
            return \Illuminate\Cache\Repository::macroCall($method, $parameters);
        }

        /**
         * Increment the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int
         * @static
         */
        public static function increment($key, $value = 1){
            return \Illuminate\Cache\FileStore::increment($key, $value);
        }

        /**
         * Decrement the value of an item in the cache.
         *
         * @param string $key
         * @param mixed $value
         * @return int
         * @static
         */
        public static function decrement($key, $value = 1){
            return \Illuminate\Cache\FileStore::decrement($key, $value);
        }

        /**
         * Remove all items from the cache.
         *
         * @return void
         * @static
         */
        public static function flush(){
            \Illuminate\Cache\FileStore::flush();
        }

        /**
         * Get the Filesystem instance.
         *
         * @return \Illuminate\Filesystem\Filesystem
         * @static
         */
        public static function getFilesystem(){
            return \Illuminate\Cache\FileStore::getFilesystem();
        }

        /**
         * Get the working directory of the cache.
         *
         * @return string
         * @static
         */
        public static function getDirectory(){
            return \Illuminate\Cache\FileStore::getDirectory();
        }

        /**
         * Get the cache key prefix.
         *
         * @return string
         * @static
         */
        public static function getPrefix(){
            return \Illuminate\Cache\FileStore::getPrefix();
        }

    }


    class Cookie extends \Illuminate\Support\Facades\Cookie{

        /**
         * Create a new cookie instance.
         *
         * @param string $name
         * @param string $value
         * @param int $minutes
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param bool $httpOnly
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
        public static function make($name, $value, $minutes = 0, $path = null, $domain = null, $secure = false, $httpOnly = true){
            return \Illuminate\Cookie\CookieJar::make($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
        }

        /**
         * Create a cookie that lasts "forever" (five years).
         *
         * @param string $name
         * @param string $value
         * @param string $path
         * @param string $domain
         * @param bool $secure
         * @param bool $httpOnly
         * @return \Symfony\Component\HttpFoundation\Cookie
         * @static
         */
        public static function forever($name, $value, $path = null, $domain = null, $secure = false, $httpOnly = true){
            return \Illuminate\Cookie\CookieJar::forever($name, $value, $path, $domain, $secure, $httpOnly);
        }

        /**
         * Expire the given cookie.
         *
         * @param string $name
         * @param string $pa