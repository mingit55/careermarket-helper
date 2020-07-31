<form id="apply-form" action="/applications" method="post">
    <input type="hidden" id="company_id" name="company_id">
</form>
<div class="container py-5">
    <div class="text-center mb-4">
        <div class="title"><?=lang("참여 기업 찾아보기", "Search for participating companies")?></div>
    </div>
    <div class="bg-gray border py-5 px-3">
        <div class="search">
            <div class="search__form">
                <div class="search__group">
                    <label for="company_name" class="search__label"><?=lang("기업명 검색", "Name")?></label>
                    <input type="text" id="search__name" class="search__control" placeholder="<?=lang("찾고 싶은 기업의 이름을 입력하세요", "Enter a company name you want to find.")?>">
                </div>
                <div class="search__group">
                    <label for="company__field" class="search__label"><?=lang("업종 검색", "Industry")?></label>
                    <div class="search__control d-flex justify-content-between p-0 border-0">
                        <select name="field" id="search__field" class="form__control company-field"></select>
                        <select name="category" id="search__category" class="form__control company-category"></select>
                    </div>
                </div>
            </div>
            <button id="search__button" class="search__button">
                <i class="fa fa-search"></i>
                <?=lang("검색", "Search")?>
            </button>
        </div>
    </div>
    <div class="mt-5 align-center">
        <span class="font-weight-bold fx-3"><?=lang("검색된 기업", "")?></span>
        <span id="search__count" class="ml-4 text-sub fx-5 font-weight-bold">0</span>
        <span class="fx-2 text-sub ml-1"><?=lang("개", "Discovered enterprise")?></span>
    </div>
    <hr class="mt-2 mb-4">
    <div id="company__row" class="row position-relative">
    </div>
</div>