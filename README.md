# Zadanie nr 1


## Podpunkt 1

**Link do repozytorium na DockerHubie:**
https://hub.docker.com/repository/docker/anik0o/fibcalc


**Opis algorytmu:**

W moim programie utworzyłam funkcję, która wykorzystuje rekurencję.
Dla zerowego indeksu elementu podaje wartość 0, dla pierwszego indeksu elementu ciągu podaje wartość 1, natomiast kolejne wartości elementów ciągu obliczane są na podstawie dwóch poprzednich elementów ciągu. Funkcja rekurencyjna wykorzystuje wywołanie funkcji 3 razy podczas wyliczania wartości elementu ciągu, z tego powodu przy wartościach powyżej 30 elementów występuje opóźnienie w wyświetlaniu wyniku na stronie.

Kod funkcji:

![image](https://user-images.githubusercontent.com/94603034/210007729-60c3eae4-d35e-4069-84db-3bab97738ada.png)



**Tworzenie repozytorium:**

Do utworzenia repozytorium wykonałam kolejne polecenia.

-inicjalizacja repozytorium

![image](https://user-images.githubusercontent.com/94603034/210011307-157fc144-2238-4434-88d2-2ac8c9ecdd8f.png)

-dodanie plików do repozytorium

![image](https://user-images.githubusercontent.com/94603034/210011347-c573a9b4-bf87-4697-aaf0-10cecab62ed0.png)

-utworzenie repozytorium zdalnego na podstawie repozytorium lokalnego

![image](https://user-images.githubusercontent.com/94603034/210011375-a9f23391-ded8-4b2c-83aa-1d9a0dad75df.png)

Efekt poleceń:

![image](https://user-images.githubusercontent.com/94603034/210011414-37e3c9b8-89a5-4b22-82c9-50bc8fd19741.png)


## Podpunkt 2

Podczas tworzenia obrazu zmieniłam nazwę katalogu zawierającego pliki projektu strony, ponieważ posiadałam niepotrzebne pliki w moim projekcie. Ostatecznie repozytorium wygląda następująco:

![image](https://user-images.githubusercontent.com/94603034/210013327-7ff1cf52-bd69-452b-b75a-e34c40e4aaf0.png)


Aby zbudować obraz wykorzystałam polecenie:
`docker build -t zadanie1`

Zbudowany obraz uruchomiłam poleceniem:
`docker run -p 80:80 zadanie1`
![image](https://user-images.githubusercontent.com/94603034/210011242-9448afa4-efd1-430d-84ea-654bf01838bd.png)


Wykonana aplikacja zostaje uruchomiona w przeglądarce i wygląda następująco:

![image](https://user-images.githubusercontent.com/94603034/210013042-825abe46-6d7b-434e-aebb-16a0e815a0de.png)

Po wpisaniu numeru elementu ciągu Fibonacciego, zsotaje wyświetlony podany numer elementu oraz jego wyliczona wartość:

![image](https://user-images.githubusercontent.com/94603034/210012986-40c5bc55-4059-4d5e-a880-2601e3a5c9cb.png)



## Podpunkt 3


Przyjęłam podstawową metodę nazewnictwa MAJOR.MINOR.PATCH.
Aby wykorzystać metodę nadawania tagów wykorzystuję metadata-action:

![image](https://user-images.githubusercontent.com/94603034/210010944-f9c1ac1f-09cd-441a-bfe1-0ea7aef886a5.png)


W celu wykorzystania ghcr.io w pliku fib.yml dodałam metodę logowania do ghcr.io za pomocą  docker/login-action@v2, następnie przy sekcji odpowiedzialnej za zbudowanie obrazu i przesłanie na DockerHuba dodaję dodatkowy tag, który pozwala na wstawienie obrazu do repozytorium GitHub Packages, 

![image](https://user-images.githubusercontent.com/94603034/210011764-5ccc3d50-1a68-42ad-9cbd-ecd1e25b061e.png)

![image](https://user-images.githubusercontent.com/94603034/210011785-e142b9ae-4475-40d9-b5bb-a8222b20aa8a.png)


## Podpunkt 4

A: Sprawdzić obecność pliku fib.yml jako opisu workflow w GitHub Action.

![image](https://user-images.githubusercontent.com/94603034/210002222-5cfed545-e8c6-4041-a291-c2bf8ca6026e.png)

B: Uruchomić GitHub Action i potwierdzić poprawność działania opracowanego
rozwiązania.

![image](https://user-images.githubusercontent.com/94603034/210003700-1cf5a377-5d11-4a31-bc5a-34ec0d8df8f7.png)

Po dwukrotnym uruchomieniu postanowiłam sprawdzić również wykonywanie workflow-ów, bezpośrednio poprzez przeglądarkę:

![image](https://user-images.githubusercontent.com/94603034/210003995-e0b8f23c-c08b-4d41-b134-3a82f501e609.png)

C: Pobrać wybrany obraz (obraz na architekturę wykorzystywaną na swoim
komputerze) i uruchomi kontener z opracowaną aplikacją. Potwierdzi poprawność
działania aplikacji. 

Pobrałam obraz za pomocą polecenia `docker pull nazwa_obrazu`:

![image](https://user-images.githubusercontent.com/94603034/210004838-ed4e3932-f90e-4bdc-9617-25f79a78dda6.png)

Następnie uruchomiłam obraz za pomocą polecenia `docker run nazwa_obrazu`:

![image](https://user-images.githubusercontent.com/94603034/210005181-28235534-a990-47be-8d16-76a80893bda4.png)


Efekt uruchomienia obrazu:
![image](https://user-images.githubusercontent.com/94603034/210005004-f071bcfd-d4ee-424e-afcf-f17e279a6845.png)

Działanie aplikacji z pobranego obrazu:
![image](https://user-images.githubusercontent.com/94603034/210005099-3ac73d37-a287-4a48-8beb-c5e4b32c31f2.png)

Link docker.io:
docker.io/anik0o/fibcalc

Link ghcr.io:
ghcr.io/anik0o/fibcalc

# Zadanie nieobowiązkowe 1 #

Utworzyłam nowy plik Dockerfile_dod1 oraz plik workflowowy fib_dod1.yml. 
Niestety nie potrafię skonfigurować pliku dockerfilowego do rozwiązania multiplatformowego.
Po próbie uruchomienia github action, otrzymuję błąd:

![image](https://user-images.githubusercontent.com/94603034/210019544-1fb3f0c3-b06d-416b-ac4e-9fa35f21c196.png)

Aby wyświetlić utworzony workflow wykonuję wyświetlenie/wylistowanie workflowów, a następnie wykonuję polecenie `gh workflow view`, aby zobaczyć szczegóły wykonywania danego workflowu:
![image](https://user-images.githubusercontent.com/94603034/210071011-4a42b308-6ef9-4f50-a280-274cf7260117.png)
