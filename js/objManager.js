function Manager()
{
	this.arrTemplates = {};
	
	this.initialize();
}

Manager.prototype.initialize = function()
{
	console.log('Hello there !');
}

objManager = new Manager();