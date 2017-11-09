# grep-word
검색 폼에서 찾을 단어를 입력하면, 서버에서 파일을 찾아줍니다.

## 1. 수정
`[절대경로]`를 수정해주세요.
```
system( 'grep -r "' . $_GET[ 's' ] . '" [절대경로] --color=always' );
```
웹서버의 루트 디렉토리가 있는 경로로 수정해주시면 됩니다.
```
system( 'grep -r "' . $_GET[ 's' ] . '" /home/user/www/ --color=always' );
```
