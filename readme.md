Container
===============
simple version of Inversion of Control

Denpendencies Injection (DI)
---------------
with DI concept, invoke new ClassA() to create instance should `obmit`

	constructor/setter injection
	then write `mock` to test a class, much more easy

Inversion of Control (IoC)
----------------
IoC go one step futher,

	instead of writing `Factory` invoke class, then pass object into contructor/setter
	we register what to do into `Container`,
	over and over agian, reuse invoke just by call $container["ClassA"]

run app by built-in server in PHP (version > 5.6)

	php -S 0.0.0.0:3000 index.php