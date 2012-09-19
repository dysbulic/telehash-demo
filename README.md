telehash-demo
=============

This project is primarily meant to be viewed in a web browser. There are however some commands you can run:

* Telehash Client: java -jar lib/telehash/jar
* Rhino Test: java -classpath /usr/share/java/js.jar:/usr/share/java/jline.jar:lib/telehash/jar org.mozilla.javascript.tools.shell.Main test/clj-telehash/rhino
* Switch Test: java -cp lib/telehash/jar telehash.switchimpl.api.switchtest

The sample application the web interface is based on is run by cloning the clj-telehash git repo ( https://www.assembla.com/code/clj-telehash/git/nodes ) and opening the samples/telehash-simple-chat/ in netbeans. I was unable to build with the stock Ubuntu netbeans and had to use 7.2 ( http://netbeans.org/downloads/ ).
