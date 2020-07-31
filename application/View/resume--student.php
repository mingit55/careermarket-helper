<div class="resume">
    <!-- 이력서 -->
    <div class="resume__container">
        <h1 class="resume__title <?=lang("", "en")?>"><?=lang("이 력 서", "Resume")?></h1>
        <!-- 인적 사항 -->
        <table class="resume__table">
            <tbody>
                <tr>
                    <td class="resume__image" rowspan="4">
                        <input type="hidden" id="profile__url" name="imageURL">
                        <input type="file" id="profile" hidden>
                        <small class="d-inline-block mb-2 text-gray"><?=lang("등록된 사진이 없습니다", "No uploaded photos")?></small>
                        <button><?=lang("사진 등록", "Upload")?></button>
                        <label for="profile"></label>
                    </td>
                    <td class="resume__label"><?=lang("이 름", "Name")?></td>
                    <td class="resume__input"><input type="text" id="personal__name"></td>
                </tr>
                <tr>
                    <td class="resume__label"><?=lang("생 년 월 일", "Birthday")?></td>
                    <td class="resume__input"><input type="text" id="personal__birthday"></td>
                </tr>
                <tr>
                    <td class="resume__label"><?=lang("연 락 처", "Phone")?></td>
                    <td class="resume__input"><input type="text" id="personal__phone"></td>
                </tr>
                <tr>
                    <td class="resume__label"><?=lang("이 메 일", "E-mail")?></td>
                    <td class="resume__input"><input type="text" id="personal__email"></td>
                </tr>
            </tbody>
        </table>
        <!-- /인적 사항 -->
        <!-- 학력 -->
        <table class="resume__table" data-info="school_data">
            <tbody>
                <tr>
                    <td rowspan="3" class="resume__label resume__autosize"><?= lang("학 력", "Education") ?></td>
                    <td class="resume__head"><?= lang("기 간", "Period") ?></td>
                    <td class="resume__head"><?= lang("학 교 명", "School Name") ?></td>
                    <td class="resume__head"><?= lang("전 공", "Major") ?></td>
                    <td class="resume__head"><?= lang("비 고", "Other") ?></td>
                    <td class="resume__head">+</td>
                </tr>
                <tr>
                    <td class="resume__input wx-200"><input type="text" name="period" class="wx-200"></td>
                    <td class="resume__input"><input type="text" name="school_name"></td>
                    <td class="resume__input"><input type="text" name="school_field"></td>
                    <td class="resume__input wx-100"><input type="text" class="wx-100" name="other"></td>
                    <td class="resume__remove">
                        <button class="btn-remove"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="resume__add" colspan="5">
                        <button class="btn-add"><?=lang("추가", "Add")?> <i class="fa fa-plus"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- /학력 -->
        <!-- 교내 활동 -->
        <table class="resume__table" data-info="act_data">
            <tbody>
                <tr>
                    <td rowspan="3" class="resume__label resume__autosize"><?=lang("교 내 활 동", "Activity")?></td>
                    <td class="resume__head"><?= lang("날 짜", "Date") ?></td>
                    <td class="resume__head"><?= lang("상 세 내 용", "Description") ?></td>
                    <td class="resume__head">+</td>
                </tr>
                <tr>
                    <td class="resume__input wx-200"><input type="text" class="wx-200" name="act_date"></td>
                    <td class="resume__input"><input type="text" name="description"></td>
                    <td class="resume__remove">
                        <button class="btn-remove"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="resume__add" colspan="3">
                        <button class="btn-add"><?=lang("추가", "Add")?> <i class="fa fa-plus"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- /교내 활동 -->
        <!-- 자격 사항 -->
        <table class="resume__table" data-info="license_data">
            <tbody>
                <tr>
                    <td rowspan="3" class="resume__label resume__autosize"><?=lang("자 격 사 항", "Licenses")?></td>
                    <td class="resume__head"><?=lang("취 득 일", "Date")?></td>
                    <td class="resume__head"><?=lang("자 격 명", "Lic-Name")?></td>
                    <td class="resume__head"><?=lang("발 급 기 관", "Organization")?></td>
                    <td class="resume__head">+</td>
                </tr>
                <tr>
                    <td class="resume__input wx-200"><input type="text" class="wx-200" name="license_date"></td>
                    <td class="resume__input"><input type="text" name="license_name"></td>
                    <td class="resume__input"><input type="text" name="organization"></td>
                    <td class="resume__remove">
                        <button class="btn-remove"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="resume__add" colspan="4">
                        <button class="btn-add"><?=lang("추가", "Add")?> <i class="fa fa-plus"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- /자격 사항 -->
        <!-- 수상 내역 -->
        <table class="resume__table" data-info="award_data">
            <tbody>
                <tr>
                    <td rowspan="3" class="resume__label resume__autosize"><?=lang("수 상 내 역", "Awards")?></td>
                    <td class="resume__head"><?=lang("수 상 일", "Date")?></td>
                    <td class="resume__head"><?=lang("수 상 명", "Awa-name")?></td>
                    <td class="resume__head"><?=lang("발 급 기 관", "Organization")?></td>
                    <td class="resume__head">+</td>
                </tr>
                <tr>
                    <td class="resume__input wx-200"><input type="text" class="wx-200" name="award_date"></td>
                    <td class="resume__input"><input type="text" name="award_name"></td>
                    <td class="resume__input"><input type="text" name="organization"></td>
                    <td class="resume__remove">
                        <button class="btn-remove"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="resume__add" colspan="4">
                        <button class="btn-add"><?=lang("추가", "Add")?> <i class="fa fa-plus"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- /수상 내역 -->
    </div>
    <!-- /이력서 -->
    <!-- 자기소개서 -->
    <div class="resume__container mt-5">
        <div class="resume__title"><?=lang("자기소개서", "Self-Introduction")?></div>
        <table class="resume__table">
            <tbody>
                <tr>
                    <td class="resume__label"><?=lang("성 장 과 정", "Growth Process")?></td> 
                    <td class="resume__text" data-info="growth_text">
                        <textarea></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="resume__label"><?=lang("성격 및 특기", "Character")?></td> 
                    <td class="resume__text" data-info="character_text">
                        <textarea></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="resume__label"><?=lang("지 원 동 기", "Application Reason")?></td> 
                    <td class="resume__text" data-info="reason_text">
                        <textarea></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="resume__label"><?=lang("입사 후 포부", "Plan after join")?></td> 
                    <td class="resume__text" data-info="plan_text">
                        <textarea></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /자기소개서 -->
</div>

<!-- 업데이트 영역 -->
<div id="update__area" class="hidden">
    <div class="process">
        <i class="fas fa-circle-notch fa-spin"></i>
        <span><?=lang("업데이트 중입니다", "Updating")?>···.</span>
    </div>
    <div class="success">
        <i class="fas fa-check"></i>
        <span><?=lang("업데이트 완료", "Done")?>!</span>
    </div>
</div>
<!-- /업데이트 영역 -->