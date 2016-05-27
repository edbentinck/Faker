<?php

namespace Faker\Provider\ge_GE;

class Person extends \Faker\Provider\Person
{

    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
        '{{firstNameMale}} {{lastName}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
        '{{firstNameFemale}} {{lastName}}',
    );

    /**
     * {@link} https://en.wikipedia.org/wiki/List_of_Georgian_surnames
     **/
    protected static $lastName = array('აბაკელია', 'აბაშიძე', 'აბაზასძე', 'აფხაზი', 'აბრამიძე', 'აბულაძე', 'აბულეთისძე', 'აბუსელიძე', 'აგიაშვილი', 'ახალკაცი', 'ახალაია', 'ახვლედიანი', 'ალასანია', 'ალავიძე', 'ალექსიძე', 'ამილახვარი', 'ამირეჯიბი', 'ამირანაშვილი', 'ამირხანაშვილი', 'ანჩაბაძე', 'ანდრონიკაშვილი', 'ანჯაფარიძე', 'აფაქიძე', 'არაბიძე', 'არახამია', 'არველაძე', 'არზიანი', 'ასათიანი', 'ასლანიშვილი', 'ავალიანი', 'ავალიშვილი', 'ათანაშვილი', 'ბაბადიშვილი', 'ბაგრატიონი', 'ბაგრატიონი დავითაშვილი', 'ბაგრატიონი მუხრანელი', 'ბახია', 'ბახსოლიანი', 'ბაქრაძე', 'ბალახაძე', 'ბალანჩივაძე', 'ბალავაძე', 'ბანძელაძე', 'ბარათაშვილი', 'ბარნაბიშვილი', 'ბერიძე', 'ბესტავაშვილი', 'ბინიაშვილი', 'ბოჭორიშვილი', 'ბოკუჩავა', 'ბოლქვაძე', 'ბოტკოველი', 'ბურჭულაძე', 'ბობოხიძე', 'ბუკია', 'ბასილია', 'ჭაბუკიანი', 'ჩაჩხიანი', 'ჭანტურია', 'ჩარკვიანი', 'ჭავჭავაძე', 'ჩერქეზიშვილი', 'ჭიაურელი', 'ჩიჩუა', 'ჩიქოვანი', 'ჭკადუა', 'ჭყონია', 'ჩხეტიძე', 'ჩოლოყაშვილი', 'ჩახუნაშვილი', 'ჩხაიძე', 'ჩხეიძე', 'დადიანი', 'დადეშქელიანი', 'დარჩიძე', 'დარსალია', 'დავითაია', 'დავითულიანი', 'დგებუაძე', 'დიასამიძე', 'დოლიძე', 'დონაური', 'დონღვანი', 'ჯუღაშვილი', 'არაგვის ერისთავი', 'გურიის ერისთავი', 'რაჭის ერისთავი', 'ესაძე', 'გოგოლაური', 'გაბაშვილი', 'გაგუა', 'გახარია', 'განძიელი-გეგელია', 'გარსევანიშვილი', 'გამყრელიძე', 'გამსახურდია', 'გედევანიშვილი', 'გელაძე', 'გელოვანი', 'გიორგაძე', 'გიორგობიანი', 'ღლონტი', 'გლოველი', 'გოგოლაძე', 'გოცირიძე', 'გრუზინსკი', 'გუგუნავა', 'გურამიშვილი', 'გურგენიძე', 'გურული', 'გურიელი', 'გვაზავა', 'გვასალია', 'ღურწკაია', 'გოგოლიძე', 'იოსელიანი', 'იარაჯული', 'იაშვილი', 'იოსავა', 'ილურიძე', 'იმედაშვილი', 'ივანიშვილი', 'ჯამბაკურ-ორბელიანი', 'ჯალაღონია', 'ჯანანაშვილი', 'ჯანაშია', 'ჯანდიერი', 'ჯაფარიძე', 'ჯაყელი', 'ჯავახიშვილი', 'ჯავრიშვილი', 'ჯელაძე', 'ჯიბუტი', 'ჯინჯიხაშვილი', 'ჯიშკარიანი', 'ჯორჯაძე', 'ჯუანშერიანი', 'ჯუღაშვილი', 'კახაბერიძე', 'ყალიჩავა', 'კაპანაძე', 'კასრაძე', 'ყაზბეგი', 'კერესელიძე', 'ქაშიბაძე', 'ხარაიშვილი', 'ხარძიანი', 'ხომერიკი', 'ხუციშვილი', 'ხუჯაძე', 'ხურცილავა', 'კიკნაძე', 'ყიფიანი', 'ქობალია', 'ქორიძე', 'კოტრიკაძე', 'კვარაცხელია', 'კვერნაძე', 'ხერხეულიძე', 'ხიდირბეგიშვილი', 'ხიმშიაშვილი', 'ქობულაშვილი', 'ქოჩაკიძე', 'კოდოშვილი', 'კურტანიძე', 'ლაზარაშვილი', 'ლიჩელი', 'ლეონიძე', 'ლიპარტელიანი', 'ლობჟანიძე', 'ლორთქიფანიძე', 'ლალიაშვილი', 'მონავარდისაშვილი', 'მაჩაბელი', 'მაჭავარიანი', 'მაჭუტაძე', 'მაღალაშვილი', 'მაისურაძე', 'მამალაძე', 'მანველიშვილი', 'მჭედლიშვილი', 'მდივანი', 'მელიქიშვილი', 'მელქაძე', 'მელუა', 'მესხი', 'მიქელაძე', 'მილდიანი', 'მხეიძე', 'მუსელიანი', 'მუხრანელი', 'მჟავანაძე', 'ნაკანი', 'ნაკაშიძე', 'ნანავა', 'ნემსაძე', 'ნიკოლაძე', 'ნიჟარაძე', 'ნოღაიდელი', 'ოჩიაური', 'ონიანი', 'ორბელიანი', 'ოკინაშვილი', 'ოქროპირიძე', 'ორჯონიკიძე', 'ფანქველაშვილი', 'ფალავანდიშვილი', 'პატარაია', 'პატარავა', 'პატარკაციშვილი', 'პერტახია', 'ფავლენიშვილი', 'ფირცხალაიშვილი', 'ფხეიძე', 'რაფავა', 'რაზმაძე', 'რევაზიშვილი', 'რეხვიაშვილი', 'როყვა', 'რუსიეშვილი', 'სააკაძე', 'სააკაშვილი', 'საბაური', 'სარალიძე', 'შაბურიძე', 'საკანდელიძე', 'შალიკაშვილი', 'შენგელია', 'შერვაშიძე', 'შეთეკაური', 'შევარდნაძე', 'შველიძე', 'სიჭინავა', 'სიდამონ-ერისთავი', 'სიხარულიძე', 'სოლოღაშვილი', 'სუხიშვილი', 'შუშანია', 'სვანიძე', 'სვანაძე', 'თაბაგარი', 'თარხნიშვილი', 'თავდგირიძე', 'წერეთელი', 'ცინცაძე', 'ციციშვილი', 'ცქიტიშვილი', 'წულუკიძე', 'თორელი', 'ტუღუში', 'თუმანიშვილი', 'ტუსიშვილი', 'თავხელიძე', 'ცენტერაძე', 'უჯმაჯურიძე', 'უნდილაძე', 'ურუშაძე', 'ვაჩნაძე', 'ვახვახიშვილი', 'ვარდანიძე', 'ვეზირიშვილი', 'ვირსალაძე', 'ზამბახიძე', 'ზალკალიანი', 'ზამთარაძე', 'ზაქარაშვილი', 'ზაქარეიშვილი', 'ზაქარიაძე', 'ზიბზიბაძე', 'ზუმაძე', 'ზურაბაშვილი', 'ზურაბიანი', 'ჟორჟოლიანი', 'ზოიძე', 'ზოტიკიშვილი', 'ზვიადაძე');

    /**
     * @link http://www.behindthename.com/names/gender/masculine/usage/georgian
     */
    protected static $firstNameMale = array('აქაქი', 'აბელ', 'აბრაამ', 'აბრამ', 'ადამ', 'ალექსანდრე', 'ამბროსი', 'ამირან', 'ანზორ', 'აზნაური', 'ანდრია', 'ანრი', 'ანდრო', 'არჩილ', 'ავქსენტი', 'ავთანდილ', 'ავთო', 'ბაადურ', 'ბადრი', 'ბაგრატ', 'ბესარიონ', 'ბესო', 'ბიძინა', 'ბიძა', 'ბორის', 'დანიელ', 'დავით', 'ერეკლე', 'დავითი', 'ედუარდ', 'გაიოზ', 'გენადი', 'გივი', 'გიორგი', 'გოჩა', 'გურგენ', 'გოგა', 'გრიგოლ', 'იმედა', 'იმედი', 'იაკობ', 'ილია', 'იოანე', 'ირაკლი', 'იონა', 'იოსებ', 'იური', 'ისიდორე', 'ივანე', 'კობა', 'კონსტანტინე', 'კორნელი', 'ლადო', 'ლევან', 'მალხაზ', 'მალხაზი', 'მამუქა', 'ლუკა', 'მერაბ', 'მათე', 'მურთაზ', 'მიხეილ', 'მიშო', 'ნიკა', 'ნიკოლოზ', 'ოქროპირ', 'ოთარ', 'ნიკუშა', 'პავლე', 'ფრიდონ', 'ფრიდონი', 'რამაზ', 'პეტრე', 'რამაზი', 'რევაზ', 'რევაზი', 'რეზიკო', 'როსტომ', 'საბა', 'სანდრო', 'სპარტაკ', 'სიმონ', 'სიმონი', 'სოსო', 'სტეფანე', 'თამაზ', 'თამაზი', 'თეიმურაზ', 'თეიმურაზი', 'თედორე', 'თემო', 'თემურ', 'თემური', 'თენგიზ', 'ტერენტი', 'ვახტანგ', 'თორნიკე', 'თომა', 'ვალერი', 'ვალერიან', 'ვანო', 'ვასო', 'ვასილ', 'ვაჟა', 'ვაჟი', 'ვეფხია', 'ვეფხი', 'ზაალ', 'ვლადიმერ', 'ზვიად', 'ზვიადი', 'ზურაბ', 'ზვიადი', 'ზაქარია');
    
    /**
     * @link http://www.behindthename.com/names/gender/feminine/usage/georgian
     */
    protected static $firstNameFemale = array('ბედისა', 'ბედი', 'დარეჯან', 'დარეჯანი', 'ანა', 'ეკა', 'ეკატერინე', 'ელენე', 'ენძელა', 'ელისაბედ', 'ელისო', 'ეთერი', 'ევა', 'გულისა', 'გული', 'გულნაზ', 'იზოლდა', 'ირინა', 'ირინე', 'ქეთევან', 'ქეთი', 'ქეთო', 'ხათუნა', 'ლალი', 'მადონა', 'ლეილა', 'მაყვალა', 'მაყვალი', 'ლია', 'მაია', 'მანანა', 'მარიამ', 'მარიამი', 'მედეა', 'მარინე', 'მარინა', 'მართა', 'მზია', 'მზე', 'ნანა', 'ნანული', 'მერი', 'ნათელა', 'ნათელი', 'ნატალია', 'ნათია', 'ნესტან', 'ნესტანი', 'რუსიკო', 'რუსუდან', 'ნინო', 'რუსუდანი', 'სოფიო', 'თამარ', 'თეკლა', 'თინათინ', 'სინათლე', 'თამარი', 'ტატიანა', 'თინათინი', 'ცისანა', 'ცის', 'ცა', 'ცისია', 'ცის', 'ცა', 'ციური', 'ცა', 'ვარდო', 'ვარდი');
}
