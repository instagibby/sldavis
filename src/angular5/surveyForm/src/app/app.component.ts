import { Component } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  // Declare instance of this.wasSelected(row#)
  wasSelectedFirst;
  wasSelectedSecond;
  wasSelectedThird;
  wasSelectedFourth;
  selected1 = 'Please Select One..';
  selected2 = 'Please Select One..';
  selected3 = 'Please Select One..';
  selected4 = 'Please Select One..';

  // Options for dropdown
  optionList = [{
      name: 'default',
      description: 'Please Select One..',
      selected : false,
    },
    {
      name: 'first',
      description: '1) Best Option',
      selected: false
    },
    {
      name: 'second',
      description: '2) Next Best Option',
      selected: false
    },
    {
      name: 'third',
      description: '3) Not as good',
      selected: false
    },
    {
      name: 'fourth',
      description: '4) Worst Time',
      selected: false
    },
  ];

  // Reusable code for running switch case inside primary switch
  runSwitchCaseInSwitchCase(wasSelected) {
    switch (wasSelected) {
      case '1) Best Option':
        {
          // console.log('Working first!!!');
          this.optionList[1].selected = false;
          break;
        }
      case '2) Next Best Option':
        {
          // console.log('Working second!!!');
          this.optionList[2].selected = false;
          break;
        }
      case '3) Not as good':
        {
          // console.log('Working third!!!');
          this.optionList[3].selected = false;
          break;
        }
      case '4) Worst Time':
        {
          // console.log('Working fourth!!!');
          this.optionList[4].selected = false;
          break;
        }
    }
  }

  // Runs for on event change of first optionslist
  onChangeFirst(event) {
    // console.log(event);

    // Determines which option from optionList was selected
    switch (event) {
      case '1) Best Option':
        {
          // console.log('#1');

          // Runs using First option as selected and resets
          //  the previous selected back to not being selected
          this.runSwitchCaseInSwitchCase(this.wasSelectedFirst);
          this.optionList[1].selected = !this.optionList[1].selected;
          this.wasSelectedFirst = '1) Best Option';
          break;
        }
      case '2) Next Best Option':
        {
          // console.log('#2');

          // Runs using Second option as selected and resets
          //  the previous selected back to not being selected
          this.runSwitchCaseInSwitchCase(this.wasSelectedFirst);
          this.optionList[2].selected = !this.optionList[2].selected;
          this.wasSelectedFirst = '2) Next Best Option';
          break;
        }
      case '3) Not as good':
        {
          // console.log('#3');

          // Runs using third option as selected and resets
          //  the previous selected back to not being selected
          this.runSwitchCaseInSwitchCase(this.wasSelectedFirst);
          this.optionList[3].selected = !this.optionList[3].selected;
          this.wasSelectedFirst = '3) Not as good';
          break;
        }
      case '4) Worst Time':
        {
          // console.log('#4');

          // Runs using fourth option as selected and resets
          //  the previous selected back to not being selected
          this.runSwitchCaseInSwitchCase(this.wasSelectedFirst);
          this.optionList[4].selected = !this.optionList[4].selected;
          this.wasSelectedFirst = '4) Worst Time';
          break;
        }
      default:
        {
          //  console.log('default');

          // Runs using default option as selected and resets
          //  the previous selected back to not being selected
          this.runSwitchCaseInSwitchCase(this.wasSelectedFirst);
          break;
        }
    }

  }

  // Runs for on event change of second optionslist
  onChangeSecond(event) {
    // console.log(event);

    switch (event) {
      case '1) Best Option':
        {
          // console.log('#1');
          this.runSwitchCaseInSwitchCase(this.wasSelectedSecond);
          this.optionList[1].selected = !this.optionList[1].selected;
          this.wasSelectedSecond = '1) Best Option';
          break;
        }
      case '2) Next Best Option':
        {
          // console.log('#2');
          this.runSwitchCaseInSwitchCase(this.wasSelectedSecond);
          this.optionList[2].selected = !this.optionList[2].selected;
          this.wasSelectedSecond = '2) Next Best Option';
          break;
        }
      case '3) Not as good':
        {
          // console.log('#3');
          this.runSwitchCaseInSwitchCase(this.wasSelectedSecond);
          this.optionList[3].selected = !this.optionList[3].selected;
          this.wasSelectedSecond = '3) Not as good';
          break;
        }
      case '4) Worst Time':
        {
          // console.log('#4');
          this.runSwitchCaseInSwitchCase(this.wasSelectedSecond);
          this.optionList[4].selected = !this.optionList[4].selected;
          this.wasSelectedSecond = '4) Worst Time';
          break;
        }
      default:
        {
          // console.log('default');
          this.runSwitchCaseInSwitchCase(this.wasSelectedSecond);
          break;
        }
    }
    // ... do other stuff here ...
  }
  // Runs for on event change of third optionslist
  onChangeThird(event) {
    // console.log(event);
    switch (event) {
      case '1) Best Option':
        {
          // console.log('#1');
          this.runSwitchCaseInSwitchCase(this.wasSelectedThird);
          this.optionList[1].selected = !this.optionList[1].selected;
          this.wasSelectedThird = '1) Best Option';
          break;
        }
      case '2) Next Best Option':
        {
          // console.log('#2');
          this.runSwitchCaseInSwitchCase(this.wasSelectedThird);
          this.optionList[2].selected = !this.optionList[2].selected;
          this.wasSelectedThird = '2) Next Best Option';

          break;
        }
      case '3) Not as good':
        {
          // console.log('#3');
          this.runSwitchCaseInSwitchCase(this.wasSelectedThird);
          this.optionList[3].selected = !this.optionList[3].selected;
          this.wasSelectedThird = '3) Not as good';
          break;
        }
      case '4) Worst Time':
        {
          // console.log('#4');
          this.runSwitchCaseInSwitchCase(this.wasSelectedThird);
          this.optionList[4].selected = !this.optionList[4].selected;
          this.wasSelectedThird = '4) Worst Time';
          break;
        }
      default:
        {
          // console.log('default');
          this.runSwitchCaseInSwitchCase(this.wasSelectedThird);
          break;
        }
    }
    // ... do other stuff here ...
  }
  // Runs for on event change of fourth optionslist
  onChangeFourth(event) {
    // console.log(event);
    switch (event) {
      case '1) Best Option':
        {
          // console.log('#1');
          this.runSwitchCaseInSwitchCase(this.wasSelectedFourth);
          this.optionList[1].selected = !this.optionList[1].selected;
          this.wasSelectedFourth = '1) Best Option';
          break;
        }
      case '2) Next Best Option':
        {
          // console.log('#2');
          this.runSwitchCaseInSwitchCase(this.wasSelectedFourth);
          this.optionList[2].selected = !this.optionList[2].selected;
          this.wasSelectedFourth = '2) Next Best Option';
          break;
        }
      case '3) Not as good':
        {
          // console.log('#3');
          this.runSwitchCaseInSwitchCase(this.wasSelectedFourth);
          this.optionList[3].selected = !this.optionList[3].selected;
          this.wasSelectedFourth = '3) Not as good';
          break;
        }
      case '4) Worst Time':
        {
          // console.log('#4');
          this.runSwitchCaseInSwitchCase(this.wasSelectedFourth);
          this.optionList[4].selected = !this.optionList[4].selected;
          this.wasSelectedFourth = '4) Worst Time';
          break;
        }
      default:
        {
          // console.log('default');
          this.runSwitchCaseInSwitchCase(this.wasSelectedFourth);
          break;
        }
    }
    // ... do other stuff here ...
  }
  // Submit button
  onButtonSubmit() {
    alert('Submitted, Thank you!');
  }
  resetPage() {
    this.selected1 = 'Please Select One..';
    this.selected2 = 'Please Select One..';
    this.selected3 = 'Please Select One..';
    this.selected4 = 'Please Select One..';
    this.wasSelectedFirst = null;
    this.wasSelectedSecond = null;
    this.wasSelectedThird = null;
    this.wasSelectedFourth = null;
    this.optionList = [{
      name: 'default',
      description: 'Please Select One..',
      selected : false,
      },
      {
        name: 'first',
        description: '1) Best Option',
        selected: false
      },
      {
        name: 'second',
        description: '2) Next Best Option',
        selected: false
      },
      {
        name: 'third',
        description: '3) Not as good',
        selected: false
      },
      {
        name: 'fourth',
        description: '4) Worst Time',
        selected: false
      },
    ];
  }

}
