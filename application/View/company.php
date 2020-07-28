<div class="container py-5">
    <div class="text-center mb-4">
        <div class="title">참여 기업 찾아보기</div>
    </div>
    <div class="bg-gray border py-5 px-3">
        <div class="search">
            <div class="search__form">
                <div class="search__group">
                    <label for="company_name" class="search__label">기업명 검색</label>
                    <input type="text" id="search__name" class="search__control" placeholder="찾고 싶은 기업의 이름을 입력하세요">
                </div>
                <div class="search__group">
                    <label for="company__field" class="search__label">업종 검색</label>
                    <div class="search__control d-flex justify-content-between p-0 border-0">
                        <select name="field" id="search__field" class="form__control company-field"></select>
                        <select name="category" id="search__category" class="form__control company-category"></select>
                    </div>
                </div>
            </div>
            <button id="search__button" class="search__button">
                <i class="fa fa-search"></i>
                검색
            </button>
        </div>
    </div>
    <div class="mt-5 align-center">
        <span class="font-weight-bold fx-3">검색된 기업</span>
        <span id="search__count" class="ml-4 text-sub fx-5 font-weight-bold">0</span>
        <span class="fx-2 text-sub ml-1">개</span>
    </div>
    <hr class="mt-2 mb-4">
    <div id="company__row" class="row position-relative">
    </div>
</div>