<div class="resume">
    <!-- 이력서 -->
    <div class="resume__container">
        <h1 class="resume__title">이 력 서</h1>
        <!-- 인적 사항 -->
        <table class="resume__table" data-info="personal">
            <tbody>
                <tr>
                    <td class="resume__image" rowspan="4">
                        <input type="hidden" id="profile__url" name="imageURL">
                        <input type="file" id="profile" hidden>
                        <small class="d-inline-block mb-2 text-gray">등록된 사진이 없습니다</small>
                        <button>사진 등록</button>
                        <label for="profile"></label>
                    </td>
                    <td class="resume__label">이 름</td>
                    <td class="resume__input"><input type="text"></td>
                </tr>
                <tr>
                    <td class="resume__label">생 년 월 일</td>
                    <td class="resume__input"><input type="text"></td>
                </tr>
                <tr>
                    <td class="resume__label">연 락 처</td>
                    <td class="resume__input"><input type="text"></td>
                </tr>
                <tr>
                    <td class="resume__label">이 메 일</td>
                    <td class="resume__input"><input type="text"></td>
                </tr>
            </tbody>
        </table>
        <!-- /인적 사항 -->
        <!-- 학력 -->
        <table class="resume__table" data-info="school">
            <tbody>
                <tr>
                    <td rowspan="3" class="resume__label resume__autosize">학 력</td>
                    <td class="resume__head">기 간</td>
                    <td class="resume__head">학 교 명</td>
                    <td class="resume__head">전 공</td>
                    <td class="resume__head">비 고</td>
                    <td class="resume__head">+</td>
                </tr>
                <tr>
                    <td class="resume__input wx-200"><input type="text" class="wx-200"></td>
                    <td class="resume__input"><input type="text"></td>
                    <td class="resume__input"><input type="text"></td>
                    <td class="resume__input wx-100"><input type="text" class="wx-100"></td>
                    <td class="resume__remove">
                        <button class="btn-remove"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="resume__add" colspan="5">
                        <button class="btn-add">추가 <i class="fa fa-plus"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- /학력 -->
        <!-- 교내 활동 -->
        <table class="resume__table" data-info="act">
            <tbody>
                <tr>
                    <td rowspan="3" class="resume__label resume__autosize">교 내 활 동</td>
                    <td class="resume__head">날 짜</td>
                    <td class="resume__head">상 세 내 용</td>
                    <td class="resume__head">+</td>
                </tr>
                <tr>
                    <td class="resume__input wx-200"><input type="text" class="wx-200"></td>
                    <td class="resume__input"><input type="text"></td>
                    <td class="resume__remove">
                        <button class="btn-remove"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="resume__add" colspan="3">
                        <button class="btn-add">추가 <i class="fa fa-plus"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- /교내 활동 -->
        <!-- 대외 활동 -->
        <table class="resume__table" data-info="license">
            <tbody>
                <tr>
                    <td rowspan="3" class="resume__label resume__autosize">자 격 사 항</td>
                    <td class="resume__head">취 득 일</td>
                    <td class="resume__head">자 격 명</td>
                    <td class="resume__head">발 급 기 관</td>
                    <td class="resume__head">+</td>
                </tr>
                <tr>
                    <td class="resume__input wx-200"><input type="text" class="wx-200"></td>
                    <td class="resume__input"><input type="text"></td>
                    <td class="resume__input"><input type="text"></td>
                    <td class="resume__remove">
                        <button class="btn-remove"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="resume__add" colspan="4">
                        <button class="btn-add">추가 <i class="fa fa-plus"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- /대외 활동 -->
        <!-- 수상 내역 -->
        <table class="resume__table" data-info="award">
            <tbody>
                <tr>
                    <td rowspan="3" class="resume__label resume__autosize">수 상 내 역</td>
                    <td class="resume__head">수 상 일</td>
                    <td class="resume__head">수 상 명</td>
                    <td class="resume__head">발 급 기 관</td>
                    <td class="resume__head">+</td>
                </tr>
                <tr>
                    <td class="resume__input wx-200"><input type="text" class="wx-200"></td>
                    <td class="resume__input"><input type="text"></td>
                    <td class="resume__input"><input type="text"></td>
                    <td class="resume__remove">
                        <button class="btn-remove"><i class="fa fa-times"></i></button>
                    </td>
                </tr>
                <tr>
                    <td class="resume__add" colspan="4">
                        <button class="btn-add">추가 <i class="fa fa-plus"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- /수상 내역 -->
    </div>
    <!-- /이력서 -->
    <!-- 자기소개서 -->
    <div class="resume__container mt-5">
        <div class="resume__title">자기소개서</div>
        <table class="resume__table">
            <tbody>
                <tr>
                    <td class="resume__label">성 장 과 정</td> 
                    <td class="resume__text">
                        <textarea></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="resume__label">성격 및 특기</td> 
                    <td class="resume__text">
                        <textarea></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="resume__label">지 원 동 기</td> 
                    <td class="resume__text">
                        <textarea></textarea>
                    </td>
                </tr>
                <tr>
                    <td class="resume__label">입사 후 포부</td> 
                    <td class="resume__text">
                        <textarea></textarea>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- /자기소개서 -->
</div>