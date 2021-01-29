# STRIMER STRONA INTERNETOWA
Implementacja projektu strony internetowej koła naukowego Strimer. Wszystkie materiały związane z projektem można znaleźć w folderze [docs/src](docs/src). Zasady pracy nad projektem znajdują się w pliku [Definition of Done](docs/dod.md).

## Temat projektu
Stworzenie strony zawierającej najważniejsze informacje dotyczące koła naukowego, takie jak:
- Informacje o kole naukowym
- Auktualności
- Projekty
- Kontakt i skład zarządu

## Praca z projektem
Aby uruchomić aplikację należy otworzyć plik index.html w programie Visual Studio Code, kliknąć prawym przyciskiem myszki na dowolne miejsce w edytorze i z listy wybrać funkcję "open with live server".

### Komendy przydatne przy używaniu Git'a
Kilka postawowych komend pozwalających na komunikację z repozytorium przy użyciu konsoli.
```
git --version
git init => tworzy plik git
git status => git status
git add [nazwa pliku] => dodanie pliku do repozytorium
git add . => dodanie wszystkich plików
git checkout -- [plik] => usuwa wszystkie zmiany
git reset => zresetowanie kolejki
git clean [-nd] [-idf]=> usuwa nieśledzone pliki i katalogi
git rm [plik] => usuwa plik z repozytorium
git commit  => zatwierdza zmiany
git commit -m "komentarz do zmiany" 
git remote add origin [SSH] => połączenie z repozytorium
git push -u origin master => wgranie zmian do zdalnego repozytorium
git pull origin master => pobieranie zmian z repozytorium
git clone [httm address] [opcjonalnie nazwa katalogu] => pobiera projekt z repozytorium

git branch feature => towrzy nową gałąź
git checkout feature => przechodzi na utworzoną gałąź
git mearge feature => łączy utworzoną gałąź z gałęzią master
git branch -d feature => usuwa gałąź
git branch => wyświetla gałęzie

.gitignore => plik gdzie wpisujemy pliki które mają być pomijane przy dodawaniu do kolejki
```

bzdury do usuniecia last test, THE LAST!
