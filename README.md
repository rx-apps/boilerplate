# Boilerplate
![GitHub](https://img.shields.io/github/license/rx-apps/boilerplate)

라이믹스 모듈의 보일러플레이트 입니다.

## 작성 지침

### 타입 지정
* 모든 메서드는 파라미터 타입과 리턴 타입을 명시해야 합니다. 단, PHP 7.0 에서 지원하지 않는 타입의 경우 생략합니다.  
* `getModel`, `getController` 와 같이 IDE가 추적하기 힘든 함수를 통해 타 모듈 클래스를 참조할 경우, 주석을 통해 타입을 명시해야 합니다.
* 모듈 내부에서 본인 모듈의 타 클래스틑 참고할 경우 `$this->getModel();` 과 같은 방식으로 주석 작성 없이 이용할 수 있습니다.

### 트리거
* 트리거는 전부 `controller` 에 등록됩니다.
* 깔끔한 관리를 위해 트리거를 처리하는 메소드의 이름에 `trigger` 접두사를 붙이는 것을 권장합니다.

### stdClass
* `stdClass` 를 이용해야 하는 경우, `new stdClass()` 보다는 `(object) [ ]` 를 권장합니다.

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
