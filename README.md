# Boilerplate
![GitHub](https://img.shields.io/github/license/rx-apps/boilerplate)

라이믹스 모듈의 보일러플레이트 입니다.

## 작성 지침

### 명명
* 모듈 이름은 기능을 잘 설명할 수 있는 이름으로 작성합니다. 독특한 이름을 사용하지 않도록 하고, 그러한 이름이 필요한 경우 모듈 설정을 통해 사용자가 직접 지정할 수 있도록 합니다.
* 모듈 클래스 이름은 언더바(_) 를 최대한 적게 사용하되, 언더바 사용을 줄이기 위해 단어를 구분하지 않는 등 가독성을 해치는 행위는 비권장합니다.
* DB 테이블 (스키마) 이름은 복수형으로 합니다.
* DB 쿼리 이름은 `getTable`, `getManyTables`, `getManyTablesWithPagination`, `insertTable`, `updateTable`, `upsertTable`, `deleteTable` 으로 합니다.

### 타입 지정
* 모든 메서드는 파라미터 타입과 리턴 타입을 명시해야 합니다. 단, PHP 7.0 에서 지원하지 않는 타입의 경우 생략합니다.  
* `getModel`, `getController` 와 같이 IDE가 추적하기 힘든 함수를 통해 타 모듈 클래스를 참조할 경우, 주석을 통해 타입을 명시해야 합니다.
* 모듈 내부에서 본인 모듈의 타 클래스틑 참고할 경우 `$this->getModel();` 과 같은 방식으로 주석 작성 없이 이용할 수 있습니다.

### 트리거
* 트리거는 전부 `controller` 에 등록됩니다.
* 깔끔한 관리를 위해 트리거를 처리하는 메소드의 이름에 `trigger` 접두사를 붙이는 것을 권장합니다.

### stdClass
* `stdClass` 를 이용해야 하는 경우, `new stdClass()` 보다는 `(object) [ ]` 를 권장합니다.

### 쿼리
* `upsert` 쿼리를 사용할 경우, `upsert` 이외의 사용처가 없더라도 `insert`, `update` 쿼리를 함께 생성해 두는 것을 권장합니다.

### 템플릿 사용
* `loop`, `cond` 등 HTML 속성으로 적용되는 템플릿 문법은 사용하지 않는 것을 원칙으로 합니다. 단, 속성에 조건문을 설정하는 `attr|cond` 형태는 허용합니다.
* `{@ // <!--suppress CheckEmptyScriptTag, HtmlUnknownTag, HtmlUnknownAttribute --> }` 를 파일 상단에 추가합니다.
* 주석을 작성할 경우, HTML 기본 주석보다 `{@ // <!-- document --> }` 형태로 작성하는 것을 권장합니다. 

## 언어파일 작성 지침

### 전역 지침
* `$lang->module_name_foobar`: 모든 항목에 `module_name_`접두사를 붙입니다.
* `$lang->module_name_txt_foobar`: 일반 텍스트는 `txt_` 접두사를 붙입니다.
* `$lang->module_name_tit_foobar`: 제목(보편적으로 `hn` 태그)에 사용되는 텍스트는 `tit_` 접두사를 붙입니다.
* `$lang->module_name_btn_foobar`: 버튼에 사용되는 텍스트는 `btn_` 접두사를 붙입니다.
* `$lang->module_name_lbl_foobar`: 입력값의 라벨으로 사용되는 텍스트는 `lbl_`을 붙입니다. 입력값의 라벨이 아니더라도 주변 요소들과의 통일을 위해 붙일 수 있습니다.

### 기본 정보
* `$lang->module_name_title`: 모듈의 이름을 작성합니다.
* `$lang->module_name_description`: 모듈의 설명을 작성합니다. 사용하지 않을 경우 작성하지 않아도 무방합니다.

### 관리자 페이지
* `$lang->module_name_admin_foobar`: 관리자 페이지에서 사용되는 모든 항목에 `admin_`접두사를 붙입니다.
* `$lang->module_name_admin_menu_foobar`: 관리자 페이지 상단에 출력되는 메뉴들의 이름은 `menu_` 접두사를 붙입니다.

## 라이선스
* GPLv2 라이선스를 따릅니다. 누구든지 포크할 수 있으며, 자유롭게 이용할 수 있습니다.
* 단, rx-apps 의 공식 자료가 아닌 경우, 관리자 페이지의 대시보드에 포함된 (광고) 항목을 제거하고 이용하세요.
