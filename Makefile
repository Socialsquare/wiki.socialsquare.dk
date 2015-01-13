all: clean submodule-update dist

clean:
	rm -rf ./dist

submodule-update:
	git submodule update --init

dist: dist-make-dir dist-mediawiki dist-specialization composer-install composer-dist

dist-make-dir:
	mkdir -p ./dist

dist-mediawiki:
	cp -r ./mediawiki/* ./dist

dist-specialization:
	cp -r ./specialization/. ./dist

composer-install:
	cd ./dist && composer install

composer-dist:
	cp ./dist/vendor/michelf/php-markdown/Michelf/Markdown.php ./dist/extensions/MarkdownExtraParser/markup.php
