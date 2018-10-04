webpackJsonp(["main"],{

/***/ "../../../../../$$_lazy_route_resource lazy recursive":
/***/ (function(module, exports) {

function webpackEmptyAsyncContext(req) {
	// Here Promise.resolve().then() is used instead of new Promise() to prevent
	// uncatched exception popping up in devtools
	return Promise.resolve().then(function() {
		throw new Error("Cannot find module '" + req + "'.");
	});
}
webpackEmptyAsyncContext.keys = function() { return []; };
webpackEmptyAsyncContext.resolve = webpackEmptyAsyncContext;
module.exports = webpackEmptyAsyncContext;
webpackEmptyAsyncContext.id = "../../../../../$$_lazy_route_resource lazy recursive";

/***/ }),

/***/ "../../../../../src/app/app.module.ts":
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
Object.defineProperty(exports, "__esModule", { value: true });
var core_1 = __webpack_require__("../../../core/esm5/core.js");
var platform_browser_1 = __webpack_require__("../../../platform-browser/esm5/platform-browser.js");
var forms_1 = __webpack_require__("../../../forms/esm5/forms.js");
var http_1 = __webpack_require__("../../../common/esm5/http.js");
var home_component_1 = __webpack_require__("../../../../../src/app/home/home.component.ts");
var header_component_1 = __webpack_require__("../../../../../src/app/header/header.component.ts");
var AppModule = (function () {
    /**
     * Main module for our application, if creating any new components, be sure to declare them above.
     * If creating any new services, provide them above
     */
    function AppModule() {
    }
    AppModule = __decorate([
        core_1.NgModule({
            imports: [
                platform_browser_1.BrowserModule,
                forms_1.FormsModule,
                http_1.HttpClientModule,
            ],
            declarations: [
                home_component_1.HomeComponent,
                header_component_1.HeaderComponent,
            ],
            providers: [],
            bootstrap: [home_component_1.HomeComponent]
        })
        /**
         * Main module for our application, if creating any new components, be sure to declare them above.
         * If creating any new services, provide them above
         */
    ], AppModule);
    return AppModule;
}());
exports.AppModule = AppModule;


/***/ }),

/***/ "../../../../../src/app/header/header.component.css":
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__("../../../../css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "header {\r\n    display: -webkit-box;\r\n    display: -ms-flexbox;\r\n    display: flex;\r\n    -webkit-box-pack: center;\r\n        -ms-flex-pack: center;\r\n            justify-content: center;\r\n    padding-top: 5px;\r\n    -webkit-box-align: center;\r\n        -ms-flex-align: center;\r\n            align-items: center;\r\n    margin-bottom: 30px;\r\n}\r\n\r\nspan {\r\n    font-size: 30px;\r\n    margin: 10px 15px 0px\r\n}", ""]);

// exports


/*** EXPORTS FROM exports-loader ***/
module.exports = module.exports.toString();

/***/ }),

/***/ "../../../../../src/app/header/header.component.html":
/***/ (function(module, exports) {

module.exports = "<header>\r\n    <span>TODO List Coding Challenge</span>\r\n</header>"

/***/ }),

/***/ "../../../../../src/app/header/header.component.ts":
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
Object.defineProperty(exports, "__esModule", { value: true });
var core_1 = __webpack_require__("../../../core/esm5/core.js");
var HeaderComponent = (function () {
    function HeaderComponent() {
    }
    HeaderComponent = __decorate([
        core_1.Component({
            selector: "thx-header",
            template: __webpack_require__("../../../../../src/app/header/header.component.html"),
            styles: [__webpack_require__("../../../../../src/app/header/header.component.css")]
        })
    ], HeaderComponent);
    return HeaderComponent;
}());
exports.HeaderComponent = HeaderComponent;


/***/ }),

/***/ "../../../../../src/app/home/home.component.css":
/***/ (function(module, exports, __webpack_require__) {

exports = module.exports = __webpack_require__("../../../../css-loader/lib/css-base.js")(false);
// imports


// module
exports.push([module.i, "i {\n  border: solid black;\n  border-width: 0 3px 3px 0;\n  display: inline-block;\n  padding: 3px;\n}\n.down {\n  transform: rotate(45deg);\n  -webkit-transform: rotate(45deg);\n}\n.up {\n  transform: rotate(-135deg);\n  -webkit-transform: rotate(-135deg);\n}\n.isCompleted {\n  text-decoration: line-through;\n}\n.hidethis {\n  display: none;\n}\nh1 {\n  text-align: center;\n}\n.notVisible {\n  visibility: hidden;\n}\n.visiblilityOn {\n  visibility: visible;\n}\nbutton > i {\n  border: none;\n}\n", ""]);

// exports


/*** EXPORTS FROM exports-loader ***/
module.exports = module.exports.toString();

/***/ }),

/***/ "../../../../../src/app/home/home.component.html":
/***/ (function(module, exports) {

module.exports = "<thx-header></thx-header>\r\n\r\n<div class=\"container\">\r\n<h1>Enter a Task...</h1>  \r\n  <!-- <div class=\"row\">\r\n    <div \r\n    class=\"alert alert-success\" role=\"alert\" data-auto-dismiss=\"2000\">\r\n      Added Successfully!\r\n    </div>\r\n    <div \r\n      class=\"alert alert-danger align-items-center\" \r\n      [ngClass]=\"{notVisible: alertDanger}\"\r\n      role=\"alert\">\r\n      Removed Successfully!\r\n      </div> \r\n  </div>-->\r\n  <form (submit)=\"addTask($event)\" autocomplete=\"off\">\r\n    <div class=\"row\">\r\n      <input \r\n        [(ngModel)]=\"title\" \r\n        name=\"title\" \r\n        class=\"form-control col-md-3 align-self-start\" \r\n        type=\"text\" \r\n        placeholder=\"*What needs done..?\" \r\n        required>\r\n      <input \r\n        [(ngModel)]=\"description\" \r\n        name=\"description\" \r\n        class=\"form-control col-md-6\" \r\n        type=\"text\" \r\n        placeholder=\"Description\">\r\n      <input \r\n        [(ngModel)]=\"due\" \r\n        name=\"due\" \r\n        class=\"form-control col-md-3\" \r\n        type=\"date\" \r\n        placeholder=\"Due date\">\r\n    </div>\r\n    <br>\r\n    <div class=\"row\">\r\n      <button \r\n        type=\"submit\" \r\n        class=\"btn btn-primary\" \r\n        [disabled]=\"title===''\">\r\n        Add Task\r\n      </button>\r\n    </div>\r\n  </form>\r\n  <br>\r\n  <form>\r\n    <div *ngFor=\"let task of tasks; let i=index\">\r\n      <div [ngClass]=\"{hidethis: task.hidden}\">\r\n        <div class=\"row\">\r\n          <div class=\"col-md-4\">\r\n            <div class=\"row\">\r\n              <div class=\"col-md-1\">\r\n                <input \r\n                  class=\"paddingRedction\"\r\n                  type=\"checkbox\" \r\n                  name=\"selected\" \r\n                  [(ngModel)]=\"task.selected\">\r\n              </div>\r\n              <div class=\"col-md-11\">\r\n                  <input \r\n                    class=\"form-control\"\r\n                    [ngClass]=\"{isCompleted: task.done}\"\r\n                    value=\"{{task.title}}\">\r\n                </div>  \r\n            </div>\r\n          </div>\r\n          <div class=\"col-md-4\">\r\n            <input \r\n              class=\"form-control\"\r\n              type=\"textarea\"\r\n              [ngClass]=\"{isCompleted: task.done}\"\r\n              value=\"{{task.description}}\">\r\n          </div>\r\n          <div class=\"row\">\r\n              <div class=\"col-md-6\">\r\n                <input \r\n                  class=\"form-control\"\r\n                  type=\"text\"\r\n                  [ngClass]=\"{isCompleted: task.done}\"\r\n                  value=\"{{task.due}}\">\r\n              </div>\r\n              <div class=\"col-md-6 align-right\">\r\n                <button \r\n                  class=\"btn btn-success\" \r\n                  (click)=\"setCompleted(task)\" \r\n                  title=\"Completed!\">\r\n                  &#10004;\r\n                </button>\r\n                <button \r\n                  class=\"btn btn-danger\" \r\n                  (click)=\"onDeleteTask(task)\" \r\n                  title=\"Delete\"> X \r\n                </button> \r\n                <button \r\n                  class=\"btn btn-primary\"\r\n                  (click)=\"onUpdateTask(task)\"\r\n                  title=\"Update\">\r\n                    <i class=\"fa fa-refresh\">\r\n                    </i>\r\n                </button>\r\n              </div>\r\n          </div>\r\n        </div>\r\n        <hr>\r\n        </div>\r\n      </div>\r\n    </form>\r\n  <div class=\"row\">\r\n    <div class=\"col-md-1\">\r\n      <button \r\n        class=\"btn btn-danger\" \r\n        [hidden]=\"disableDeleteSelected()\"\r\n        (click)=\"deleteSelectedTasks()\">\r\n        Delete Selected\r\n      </button>\r\n    </div>\r\n  </div>\r\n  <div class=\"row\">\r\n    <div class=\"col-md-1\">\r\n      <button \r\n        class=\"btn btn-secondary\" \r\n        [hidden]=\"disableDeleteSelected()\"\r\n        (click)=\"selectAllTasks()\">\r\n        Select All\r\n      </button>\r\n    </div>\r\n  </div>\r\n</div>\r\n<hr>\r\n\r\n"

/***/ }),

/***/ "../../../../../src/app/home/home.component.ts":
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
Object.defineProperty(exports, "__esModule", { value: true });
var core_1 = __webpack_require__("../../../core/esm5/core.js");
__webpack_require__("../../../../core-js/es6/reflect.js");
__webpack_require__("../../../../core-js/es7/reflect.js");
var Itask_service_1 = __webpack_require__("../../../../../src/app/service/Itask.service.ts");
var HomeComponent = (function () {
    function HomeComponent(iTaskService) {
        this.iTaskService = iTaskService;
        this.title = '';
        this.tasks = [];
        this.hidden = false;
        this.showAlertSucess = false;
        this.showAlertDanger = false;
    }
    HomeComponent.prototype.ngOnInit = function () {
        this.onGetTask();
    };
    //Gets all tasks from "api"
    HomeComponent.prototype.onGetTask = function () {
        var _this = this;
        this.iTaskService.getAllTasks()
            .subscribe(function (data) {
            data.forEach(function (element) {
                _this.taskObj = {
                    id: element.id,
                    title: element.title,
                    description: element.description,
                    due: element.due,
                    selected: _this.selected = false,
                    done: element.done,
                };
                _this.tasks.push(_this.taskObj);
            });
        });
    };
    //Creates new task
    HomeComponent.prototype.onCreateNewTask = function (taskObj) {
        var _this = this;
        this.iTaskService.createTask(taskObj)
            .subscribe(function (taskObj) { return _this.tasks.push(_this.taskObj); });
    };
    //add new task
    HomeComponent.prototype.addTask = function (event) {
        this.taskObj = {
            id: (this.tasks.length + 1),
            title: this.title,
            description: this.description,
            due: this.due,
            completed: false,
            selected: this.selected = false,
        };
        this.onCreateNewTask(this.taskObj);
        this.title = '';
        this.description = '';
        this.due = undefined;
        //this.alertTimerSuccess();
        //resets form
        //console.log(this.tasks);
        event.preventDefault();
    };
    //completes task or uncompletes if completed 
    HomeComponent.prototype.setCompleted = function (i) {
        var task = i;
        var taskId = task.id;
        if (task.done) {
            task.done = false;
            return this.iTaskService.updateTask(task, taskId)
                .subscribe();
        }
        else {
            task.done = true;
            return this.iTaskService.updateTask(task, taskId)
                .subscribe();
        }
        ;
    };
    HomeComponent.prototype.onUpdateTask = function (task) {
        //console.log(task)
        this.taskObj = task;
        var taskId = task.id;
        this.iTaskService.updateTask(task, taskId)
            .subscribe();
    };
    //deletes single task by index
    HomeComponent.prototype.onDeleteTask = function (task) {
        //console.log(task);
        var taskId = task.id;
        task.hidden = true;
        //this.alertTimerDanger()
        return this.iTaskService.deleteTask(taskId)
            .subscribe();
    };
    // turns off delete selected button if there arent any tasks
    HomeComponent.prototype.disableDeleteSelected = function () {
        if (this.tasks.length) {
            return false;
        }
        else {
            return true;
        }
    };
    //deletes all the tasks currently selected
    HomeComponent.prototype.deleteSelectedTasks = function () {
        //ES5 to reverse loop to splice by index
        for (var i = (this.tasks.length - 1); i > -1; i--) {
            if (this.tasks[i].selected) {
                this.onDeleteTask(this.tasks[i]);
                //this.alertTimerDanger();
            }
        }
    };
    //sets all tasks with button to selected
    HomeComponent.prototype.selectAllTasks = function () {
        for (var i = 0; i < this.tasks.length; i++) {
            this.tasks[i].selected = true;
        }
    };
    HomeComponent = __decorate([
        core_1.Injectable(),
        core_1.Component({
            selector: "thx-home",
            template: __webpack_require__("../../../../../src/app/home/home.component.html"),
            styles: [__webpack_require__("../../../../../src/app/home/home.component.css")],
            providers: [Itask_service_1.ITaskService]
        }),
        __metadata("design:paramtypes", [Itask_service_1.ITaskService])
    ], HomeComponent);
    return HomeComponent;
}());
exports.HomeComponent = HomeComponent;


/***/ }),

/***/ "../../../../../src/app/service/Itask.service.ts":
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
Object.defineProperty(exports, "__esModule", { value: true });
var core_1 = __webpack_require__("../../../core/esm5/core.js");
var http_1 = __webpack_require__("../../../common/esm5/http.js");
__webpack_require__("../../../../rxjs/_esm5/Rx.js");
var API_URL = 'https://angulartasklist-4e6d5.firebaseio.com/';
var ITaskService = (function () {
    function ITaskService(http) {
        this.http = http;
    }
    //GET
    ITaskService.prototype.getAllTasks = function () {
        return this.http.get(API_URL)
            .map(function (tasks) {
            return tasks;
        });
    };
    //POST
    ITaskService.prototype.createTask = function (task) {
        return this.http.post(API_URL, task);
    };
    //PUT
    ITaskService.prototype.updateTask = function (t, tId) {
        return this.http.put(API_URL + '/' + tId, t);
    };
    //DELETE
    ITaskService.prototype.deleteTask = function (id) {
        var url = "" + (API_URL + '/' + id);
        return this.http.delete(url)
            .pipe();
    };
    ITaskService = __decorate([
        core_1.Injectable(),
        __metadata("design:paramtypes", [http_1.HttpClient])
    ], ITaskService);
    return ITaskService;
}());
exports.ITaskService = ITaskService;


/***/ }),

/***/ "../../../../../src/main.ts":
/***/ (function(module, exports, __webpack_require__) {

"use strict";

Object.defineProperty(exports, "__esModule", { value: true });
var app_module_1 = __webpack_require__("../../../../../src/app/app.module.ts");
var platform_browser_dynamic_1 = __webpack_require__("../../../platform-browser-dynamic/esm5/platform-browser-dynamic.js");
__webpack_require__("../../../../zone.js/dist/zone.js");
/**
 * This is the main entry point for the applications. It's only job is to 'Bootstrap' our home module
 */
platform_browser_dynamic_1.platformBrowserDynamic().bootstrapModule(app_module_1.AppModule);


/***/ }),

/***/ 0:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("../../../../../src/main.ts");


/***/ })

},[0]);
//# sourceMappingURL=main.bundle.js.map