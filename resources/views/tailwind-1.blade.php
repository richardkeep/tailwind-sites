<!DOCTYPE html>
<html lang="en"">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Easy Wire</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="h-screen antialiased leading-none bg-gray-200">
    <div class="flex w-full min-h-screen">
        <div class="w-1/6 min-h-screen text-teal-300 bg-teal-800">
            <div class="flex items-center px-4 py-6">
                <span>
                    <svg class="w-8 text-teal-200 fill-current" version="1.1" id="Swap" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                        y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                        <path d="M14,5H4V3L0,6.5L4,10V8h10V5z M20,13.5L16,10v2H6v3h10v2L20,13.5z" />
                    </svg>
                </span>
                <span class="ml-2 text-2xl font-bold text-teal-200">easywire</span>
            </div>
            <div class="px-4 pb-4">
                <ul class="space-y-1">
                    <li class="flex items-center w-full px-2 py-2 bg-teal-900 rounded-lg cursor-pointer">
                        <span>
                            <svg class="w-5 text-teal-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M16.783 10c0-1.049.646-1.875 1.617-2.443a8.932 8.932 0 00-.692-1.672c-1.089.285-1.97-.141-2.711-.883-.741-.74-.968-1.621-.683-2.711a8.732 8.732 0 00-1.672-.691c-.568.97-1.595 1.615-2.642 1.615-1.048 0-2.074-.645-2.643-1.615a8.697 8.697 0 00-1.671.691c.285 1.09.059 1.971-.684 2.711-.74.742-1.621 1.168-2.711.883A8.797 8.797 0 001.6 7.557c.97.568 1.615 1.394 1.615 2.443 0 1.047-.645 2.074-1.615 2.643a8.89 8.89 0 00.691 1.672c1.09-.285 1.971-.059 2.711.682.741.742.969 1.623.684 2.711a8.841 8.841 0 001.672.693c.568-.973 1.595-1.617 2.643-1.617 1.047 0 2.074.645 2.643 1.617a8.963 8.963 0 001.672-.693c-.285-1.088-.059-1.969.683-2.711.741-.74 1.622-1.166 2.711-.883a8.811 8.811 0 00.692-1.672c-.973-.569-1.619-1.395-1.619-2.442zM10 13.652a3.652 3.652 0 110-7.306 3.653 3.653 0 010 7.306z" />
                                </svg>
                        </span>
                        <span class="ml-2 text-sm font-medium tracking-wide">Home</span>
                    </li>
                    <li class="flex items-center w-full px-2 py-2 rounded-lg cursor-pointer hover:bg-teal-900">
                        <span>
                            <svg class="w-5 text-teal-500 fill-current" version="1.1" id="Back_in_time" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                        <path d="M11,1.799c-4.445,0-8.061,3.562-8.169,7.996V10H0.459l3.594,3.894L7.547,10H4.875V9.795
                            C4.982,6.492,7.683,3.85,11,3.85c3.386,0,6.131,2.754,6.131,6.15S14.386,16.15,11,16.15c-1.357,0-2.611-0.445-3.627-1.193
                            l-1.406,1.504c1.388,1.088,3.135,1.738,5.033,1.738c4.515,0,8.174-3.67,8.174-8.199S15.515,1.799,11,1.799z M10,5v5
                            c0,0.13,0.027,0.26,0.077,0.382c0.051,0.122,0.124,0.233,0.216,0.325l3.2,3.2c0.283-0.183,0.55-0.389,0.787-0.628L12,11V5H10z"/>
                        </svg>

                        </span>
                        <span class="ml-2 text-sm font-medium tracking-wide">History</span>
                    </li>
                    <li class="flex items-center w-full px-2 py-2 rounded-lg cursor-pointer hover:bg-teal-900">
                        <span>
                            <svg class="w-5 text-teal-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M16.783 10c0-1.049.646-1.875 1.617-2.443a8.932 8.932 0 00-.692-1.672c-1.089.285-1.97-.141-2.711-.883-.741-.74-.968-1.621-.683-2.711a8.732 8.732 0 00-1.672-.691c-.568.97-1.595 1.615-2.642 1.615-1.048 0-2.074-.645-2.643-1.615a8.697 8.697 0 00-1.671.691c.285 1.09.059 1.971-.684 2.711-.74.742-1.621 1.168-2.711.883A8.797 8.797 0 001.6 7.557c.97.568 1.615 1.394 1.615 2.443 0 1.047-.645 2.074-1.615 2.643a8.89 8.89 0 00.691 1.672c1.09-.285 1.971-.059 2.711.682.741.742.969 1.623.684 2.711a8.841 8.841 0 001.672.693c.568-.973 1.595-1.617 2.643-1.617 1.047 0 2.074.645 2.643 1.617a8.963 8.963 0 001.672-.693c-.285-1.088-.059-1.969.683-2.711.741-.74 1.622-1.166 2.711-.883a8.811 8.811 0 00.692-1.672c-.973-.569-1.619-1.395-1.619-2.442zM10 13.652a3.652 3.652 0 110-7.306 3.653 3.653 0 010 7.306z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm font-medium tracking-wide">Balances</span>
                    </li>
                    <li class="flex items-center w-full px-2 py-2 rounded-lg cursor-pointer hover:bg-teal-900">
                        <span>
                            <svg class="w-5 text-teal-500 fill-current" version="1.1" id="V-card" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                        <path d="M19,3H1C0.447,3,0,3.447,0,4v12c0,0.552,0.447,1,1,1h18c0.553,0,1-0.448,1-1V4C20,3.448,19.553,3,19,3z
                            M13,7h4v1h-4V7z M11,14.803c-0.129-0.102-0.293-0.201-0.529-0.303c-1.18-0.508-2.961-1.26-2.961-2.176
                            c0-0.551,0.359-0.371,0.518-1.379c0.066-0.418,0.385-0.007,0.445-0.961c0-0.38-0.174-0.475-0.174-0.475s0.088-0.562,0.123-0.996
                            c0.036-0.453-0.221-1.8-1.277-2.097C6.959,6.228,6.834,6.305,7.403,6.004C6.159,5.945,5.869,6.596,5.207,7.075
                            C4.643,7.495,4.49,8.16,4.518,8.514C4.555,8.947,4.643,9.51,4.643,9.51S4.468,9.604,4.468,9.984c0.061,0.954,0.38,0.543,0.445,0.961
                            c0.158,1.008,0.519,0.828,0.519,1.379c0,0.916-1.781,1.668-2.961,2.176C2.268,14.588,2.122,14.673,2,14.76V5h9V14.803z M18,11h-5v-1
                            h5V11z"/>
                        </svg>

                        </span>
                        <span class="ml-2 text-sm font-medium tracking-wide">Cards</span>
                    </li>
                    <li class="flex items-center w-full px-2 py-2 rounded-lg cursor-pointer hover:bg-teal-900">
                        <span>
                            <svg class="w-5 text-teal-500 fill-current" version="1.1" id="Users" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                        <path  d="M15.989,19.129c0-2.246-2.187-3.389-4.317-4.307c-2.123-0.914-2.801-1.684-2.801-3.334
                            c0-0.989,0.648-0.667,0.932-2.481c0.12-0.752,0.692-0.012,0.802-1.729c0-0.684-0.313-0.854-0.313-0.854s0.159-1.013,0.221-1.793
                            c0.064-0.817-0.398-2.56-2.301-3.095C7.88,1.195,7.655,0.654,8.679,0.112c-2.24-0.104-2.761,1.068-3.954,1.93
                            c-1.015,0.756-1.289,1.953-1.24,2.59c0.065,0.78,0.223,1.793,0.223,1.793s-0.314,0.17-0.314,0.854
                            c0.11,1.718,0.684,0.977,0.803,1.729C4.481,10.822,5.13,10.5,5.13,11.489c0,1.65-0.212,2.21-2.336,3.124
                            C0.663,15.53,0,17,0.011,19.129C0.014,19.766,0,20,0,20h16C16,20,15.989,19.766,15.989,19.129z M18.528,13.365
                            c-1.135-0.457-1.605-1.002-1.605-2.066c0-0.641,0.418-0.432,0.602-1.603c0.077-0.484,0.447-0.008,0.518-1.115
                            c0-0.441-0.202-0.551-0.202-0.551s0.103-0.656,0.143-1.159c0.05-0.627-0.364-2.247-2.268-2.247c-1.903,0-2.318,1.62-2.269,2.247
                            c0.042,0.502,0.144,1.159,0.144,1.159s-0.202,0.109-0.202,0.551c0.071,1.107,0.441,0.631,0.518,1.115
                            c0.184,1.172,0.602,0.963,0.602,1.603c0,1.064-0.438,1.562-1.809,2.152c-0.069,0.029-0.12,0.068-0.183,0.102
                            c1.64,0.712,4.226,1.941,4.838,4.447H20c0,0,0-1.906,0-2.318C20,14.682,19.727,13.848,18.528,13.365z"/>
                        </svg>

                        </span>
                        <span class="ml-2 text-sm font-medium tracking-wide">Recipients</span>
                    </li>
                    <li class="flex items-center w-full px-2 py-2 rounded-lg cursor-pointer hover:bg-teal-900">
                        <span>
                            <svg class="w-5 text-teal-500 fill-current" version="1.1" id="Text" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                        <path d="M15.5,11h-11C4.225,11,4,11.225,4,11.5v1C4,12.776,4.225,13,4.5,13h11c0.276,0,0.5-0.224,0.5-0.5v-1
                            C16,11.225,15.776,11,15.5,11z M15.5,7h-11C4.225,7,4,7.225,4,7.5v1C4,8.776,4.225,9,4.5,9h11C15.776,9,16,8.776,16,8.5v-1
                            C16,7.225,15.776,7,15.5,7z M10.5,15h-6C4.225,15,4,15.225,4,15.5v1C4,16.776,4.225,17,4.5,17h6c0.276,0,0.5-0.224,0.5-0.5v-1
                            C11,15.225,10.776,15,10.5,15z M15.5,3h-11C4.225,3,4,3.225,4,3.5v1C4,4.776,4.225,5,4.5,5h11C15.776,5,16,4.776,16,4.5v-1
                            C16,3.225,15.776,3,15.5,3z"/>
                        </svg>

                        </span>
                        <span class="ml-2 text-sm font-medium tracking-wide">Reports</span>
                    </li>
                </ul>
            </div>
            <div class="px-4 pt-4 border-t-4 border-teal-900">
                <ul class="space-y-1">
                    <li class="flex items-center w-full px-2 py-2 rounded-lg cursor-pointer hover:bg-teal-900">
                        <span>
                            <svg class="w-5 text-teal-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M16.783 10c0-1.049.646-1.875 1.617-2.443a8.932 8.932 0 00-.692-1.672c-1.089.285-1.97-.141-2.711-.883-.741-.74-.968-1.621-.683-2.711a8.732 8.732 0 00-1.672-.691c-.568.97-1.595 1.615-2.642 1.615-1.048 0-2.074-.645-2.643-1.615a8.697 8.697 0 00-1.671.691c.285 1.09.059 1.971-.684 2.711-.74.742-1.621 1.168-2.711.883A8.797 8.797 0 001.6 7.557c.97.568 1.615 1.394 1.615 2.443 0 1.047-.645 2.074-1.615 2.643a8.89 8.89 0 00.691 1.672c1.09-.285 1.971-.059 2.711.682.741.742.969 1.623.684 2.711a8.841 8.841 0 001.672.693c.568-.973 1.595-1.617 2.643-1.617 1.047 0 2.074.645 2.643 1.617a8.963 8.963 0 001.672-.693c-.285-1.088-.059-1.969.683-2.711.741-.74 1.622-1.166 2.711-.883a8.811 8.811 0 00.692-1.672c-.973-.569-1.619-1.395-1.619-2.442zM10 13.652a3.652 3.652 0 110-7.306 3.653 3.653 0 010 7.306z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm font-medium tracking-wide">Settings</span>
                    </li>
                    <li class="flex items-center w-full px-2 py-2 rounded-lg cursor-pointer hover:bg-teal-900">
                        <span>
                            <svg class="w-5 text-teal-500 fill-current" version="1.1" id="Help_circled" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                            y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                        <path d="M10,0.4c-5.302,0-9.6,4.298-9.6,9.6s4.298,9.6,9.6,9.6c5.301,0,9.6-4.298,9.6-9.601
                            C19.6,4.698,15.301,0.4,10,0.4z M9.849,15.599H9.798c-0.782-0.023-1.334-0.6-1.311-1.371c0.022-0.758,0.587-1.309,1.343-1.309
                            l0.046,0.002c0.804,0.023,1.35,0.594,1.327,1.387C11.18,15.068,10.625,15.599,9.849,15.599z M13.14,9.068
                            c-0.184,0.26-0.588,0.586-1.098,0.983l-0.562,0.387c-0.308,0.24-0.494,0.467-0.563,0.688c-0.056,0.174-0.082,0.221-0.087,0.576v0.09
                            H8.685l0.006-0.182c0.027-0.744,0.045-1.184,0.354-1.547c0.485-0.568,1.555-1.258,1.6-1.287c0.154-0.115,0.283-0.246,0.379-0.387
                            c0.225-0.311,0.324-0.555,0.324-0.793c0-0.334-0.098-0.643-0.293-0.916c-0.188-0.266-0.545-0.398-1.061-0.398
                            c-0.512,0-0.863,0.162-1.072,0.496c-0.216,0.341-0.325,0.7-0.325,1.067v0.092H6.386L6.39,7.841c0.057-1.353,0.541-2.328,1.435-2.897
                            C8.388,4.583,9.089,4.4,9.906,4.4c1.068,0,1.972,0.26,2.682,0.772c0.721,0.519,1.086,1.297,1.086,2.311
                            C13.673,8.05,13.494,8.583,13.14,9.068z"/>
                        </svg>
                        </span>
                        <span class="ml-2 text-sm font-medium tracking-wide">Help</span>
                    </li>
                    <li class="flex items-center w-full px-2 py-2 rounded-lg cursor-pointer hover:bg-teal-900">
                        <span>
                            <svg class="w-5 text-teal-500 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path
                                    d="M16.783 10c0-1.049.646-1.875 1.617-2.443a8.932 8.932 0 00-.692-1.672c-1.089.285-1.97-.141-2.711-.883-.741-.74-.968-1.621-.683-2.711a8.732 8.732 0 00-1.672-.691c-.568.97-1.595 1.615-2.642 1.615-1.048 0-2.074-.645-2.643-1.615a8.697 8.697 0 00-1.671.691c.285 1.09.059 1.971-.684 2.711-.74.742-1.621 1.168-2.711.883A8.797 8.797 0 001.6 7.557c.97.568 1.615 1.394 1.615 2.443 0 1.047-.645 2.074-1.615 2.643a8.89 8.89 0 00.691 1.672c1.09-.285 1.971-.059 2.711.682.741.742.969 1.623.684 2.711a8.841 8.841 0 001.672.693c.568-.973 1.595-1.617 2.643-1.617 1.047 0 2.074.645 2.643 1.617a8.963 8.963 0 001.672-.693c-.285-1.088-.059-1.969.683-2.711.741-.74 1.622-1.166 2.711-.883a8.811 8.811 0 00.692-1.672c-.973-.569-1.619-1.395-1.619-2.442zM10 13.652a3.652 3.652 0 110-7.306 3.653 3.653 0 010 7.306z" />
                            </svg>
                        </span>
                        <span class="ml-2 text-sm font-medium tracking-wide">Privacy</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-5/6 min-h-screen">
            <div class="container px-24 py-2 mx-auto bg-white shadow-md">
                <div class="flex items-center justify-between py-2 border-b-2 border-gray-300">
                    <div class="relative">
                        <input class="p-2 pl-8 text-sm rounded-full focus:border focus:border-gray-400" type="text" placeholder="Search transactions">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 pointer-events-none fill-current" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20">
                                <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="flex items-center">
                       <svg class="w-6 h-6 text-gray-400 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M14.65 8.512c-2.28-4.907-3.466-6.771-7.191-6.693-1.327.027-1.009-.962-2.021-.587-1.01.375-.143.924-1.177 1.773-2.902 2.383-2.635 4.587-1.289 9.84.567 2.213-1.367 2.321-.602 4.465.559 1.564 4.679 2.219 9.025.607 4.347-1.613 7.086-4.814 6.527-6.378-.765-2.145-2.311-.961-3.272-3.027zm-3.726 8.083c-3.882 1.44-7.072.594-7.207.217-.232-.65 1.253-2.816 5.691-4.463s6.915-1.036 7.174-.311c.153.429-1.775 3.116-5.658 4.557zm-1.248-3.494c-2.029.753-3.439 1.614-4.353 2.389.643.584 1.847.726 3.046.281 1.527-.565 2.466-1.866 2.095-2.904l-.016-.036c-.251.082-.508.171-.772.27z"/></svg>
                        <div class="flex items-center ml-4 space-x-2 cursor-pointer">
                            <img class="w-8 rounded-full" src="https://randomuser.me/api/portraits/women/81.jpg" alt="lady">
                            <span class="block text-sm font-semibold text-gray-800">Emilia Birch</span>
                            <span class="block">
                                <svg class="w-4 text-gray-500 fill-current" version="1.1" id="Chevron_down" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                            <path d="M4.516,7.548c0.436-0.446,1.043-0.481,1.576,0L10,11.295l3.908-3.747c0.533-0.481,1.141-0.446,1.574,0
                                c0.436,0.445,0.408,1.197,0,1.615c-0.406,0.418-4.695,4.502-4.695,4.502C10.57,13.888,10.285,14,10,14s-0.57-0.112-0.789-0.335
                                c0,0-4.287-4.084-4.695-4.502C4.107,8.745,4.08,7.993,4.516,7.548z"/>
                            </svg>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="flex items-center justify-between py-4">
                    <div class="flex items-center">
                        <img class="w-16 rounded-full" src="https://randomuser.me/api/portraits/women/81.jpg" alt="lady">
                        <div class="h-full ml-2">
                            <h3 class="text-lg font-bold text-gray-800">Good morning, Emilia Birch</h3>
                            <div class="flex items-center pt-4">
                                <span>
                                    <svg class="w-4 text-gray-400 fill-current"  version="1.1" id="Shop" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                    <path d="M6.123,7.25L6.914,2H2.8L1.081,6.5C1.028,6.66,1,6.826,1,7c0,1.104,1.15,2,2.571,2
                                        C4.881,9,5.964,8.236,6.123,7.25z M10,9c1.42,0,2.571-0.896,2.571-2c0-0.041-0.003-0.082-0.005-0.121L12.057,2H7.943l-0.51,4.875
                                        C7.431,6.916,7.429,6.957,7.429,7C7.429,8.104,8.58,9,10,9z M15,10.046V14H5v-3.948C4.562,10.21,4.08,10.3,3.571,10.3
                                        c-0.195,0-0.384-0.023-0.571-0.049V16.6C3,17.37,3.629,18,4.398,18H15.6c0.77,0,1.4-0.631,1.4-1.4v-6.348
                                        c-0.188,0.025-0.376,0.049-0.571,0.049C15.923,10.3,15.439,10.208,15,10.046z M18.92,6.5L17.199,2h-4.113l0.79,5.242
                                        C14.03,8.232,15.113,9,16.429,9C17.849,9,19,8.104,19,7C19,6.826,18.972,6.66,18.92,6.5z"/>
                                    </svg>
                                </span>
                                <span class="ml-1 text-sm font-semibold text-gray-500">Duke Street Studio</span>
                                <span class="p-1 ml-4 bg-green-400 rounded-full">
                                    <svg class="w-2 text-white fill-current" version="1.1" id="Check" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                    <path d="M8.294,16.998c-0.435,0-0.847-0.203-1.111-0.553L3.61,11.724c-0.465-0.613-0.344-1.486,0.27-1.951
                                        c0.615-0.467,1.488-0.344,1.953,0.27l2.351,3.104l5.911-9.492c0.407-0.652,1.267-0.852,1.921-0.445
                                        c0.653,0.406,0.854,1.266,0.446,1.92L9.478,16.34c-0.242,0.391-0.661,0.635-1.12,0.656C8.336,16.998,8.316,16.998,8.294,16.998z"/>
                                    </svg>
                                </span>
                                <span class="ml-1 text-sm font-semibold text-gray-500">Verified Account</span>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="px-4 py-2 text-sm font-bold text-gray-700 border-2 border-gray-400 rounded-md focus:outline-none focus:border-gray-500">Add money</button>
                        <button class="px-4 py-2 ml-2 text-sm font-bold text-white bg-teal-800 rounded-md focus:outline-none focus:bg-gray-700">Send money</button>
                    </div>
                </div>
            </div>
            <div class="container px-24 py-4 mx-auto">
                <h3 class="mt-2 text-base font-semibold text-gray-800">Overview</h3>
                <div class="flex justify-between mt-2">
                    <div class="w-full py-4 pl-6 bg-white rounded-md shadow-md">
                        <div class="mb-10">
                            <div class="flex items-center">
                                <svg class="h-4 text-gray-500 fill-current" version="1.1" id="Credit_card" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                            <path d="M18,3H2C0.899,3,0,3.9,0,5v10c0,1.1,0.899,2,2,2h16c1.1,0,2-0.9,2-2V5C20,3.9,19.1,3,18,3z M18,15H2V9h16V15
                                z M18,6H2V5h16V6z M4,11.1v0.6h0.6v-0.6H4z M7.6,12.299V12.9h1.2v-0.601h0.6v-0.6H10v-0.6H8.8v0.6H8.199v0.6H7.6z M10,12.9v-0.601
                                H9.399V12.9H10z M7,12.9v-0.601H5.8V12.9H7z M7.6,11.699h0.6v-0.6H7v1.199h0.6V11.699z M5.199,12.299H5.8v-0.6h0.6v-0.6H5.2v0.6H4.6
                                v0.6H4V12.9h1.199V12.299z"/>
                            </svg>
                                <div class="flex flex-col ml-2">
                                    <span class="pb-1 text-xs text-gray-500">Account Balance</span>
                                    <span class="pt-1 text-lg font-semibold tracking-wide text-gray-700">$12,027.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-xs text-teal-500 cursor-pointer hover:underline">
                            View all
                        </div>
                    </div>
                    <div class="w-full py-4 pl-6 ml-4 bg-white rounded-md shadow-md">
                        <div class="mb-10">
                            <div class="flex items-center">
                                <svg class="h-4 text-gray-500 fill-current" version="1.1" id="Cycle" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20"
                                    enable-background="new 0 0 20 20" xml:space="preserve">
                                    <path
                                        d="M5.516,14.224C3.254,11.792,3.294,7.98,5.644,5.613c0.962-0.969,2.164-1.547,3.414-1.736L8.989,1.8
                                        C7.234,2.013,5.537,2.796,4.192,4.151c-3.149,3.17-3.187,8.289-0.123,11.531l-1.741,1.752l5.51,0.301l-0.015-5.834L5.516,14.224z
                                            M12.163,2.265l0.015,5.834l2.307-2.322c2.262,2.434,2.222,6.246-0.128,8.611c-0.961,0.969-2.164,1.547-3.414,1.736l0.069,2.076
                                        c1.755-0.213,3.452-0.996,4.798-2.35c3.148-3.172,3.186-8.291,0.122-11.531l1.741-1.754L12.163,2.265z" />
                                </svg>
                                <div class="flex flex-col ml-2">
                                    <span class="pb-1 text-xs text-gray-500">Pending</span>
                                    <span class="pt-1 text-lg font-semibold tracking-wide text-gray-700">$12,027.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-xs text-teal-500 cursor-pointer hover:underline">
                            View all
                        </div>
                    </div>
                    <div class="w-full py-4 pl-6 ml-4 bg-white rounded-md shadow-md">
                        <div class="mb-10">
                            <div class="flex items-center">
                                <svg class="h-4 text-gray-500 fill-current" version="1.1" id="Time_slot" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                            <path d="M10,0.4c-5.302,0-9.6,4.298-9.6,9.6s4.298,9.6,9.6,9.6c5.301,0,9.6-4.298,9.6-9.601
                                C19.6,4.698,15.301,0.4,10,0.4z M10,17.599c-4.197,0-7.6-3.402-7.6-7.6c0-4.197,3.402-7.6,7.6-7.6l0,0V10l6.792-3.396
                                C17.305,7.627,17.6,8.777,17.6,10C17.6,14.197,14.197,17.599,10,17.599z"/>
                            </svg>

                                <div class="flex flex-col ml-2">
                                    <span class="pb-1 text-xs text-gray-500">Processed (Last 30 days)</span>
                                    <span class="pt-1 text-lg font-semibold tracking-wide text-gray-700">$12,027.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="text-xs text-teal-500 cursor-pointer hover:underline">
                            View all
                        </div>
                    </div>
                </div>
            </div>
            <div class="container px-24 py-4 mx-auto">
                <h3 class="mt-2 text-base font-semibold text-gray-800">Recent activity</h3>
                <div class="w-full mt-2 bg-white">
                    <table class="w-full">
                        <thead>
                            <tr class="bg-gray-100">
                                <th class="p-4 text-sm font-semibold text-left text-gray-600 uppercase">Amount</th>
                                <th class="p-4 text-sm font-semibold text-left text-gray-600 uppercase">Transaction</th>
                                <th class="p-4 text-sm font-semibold text-left text-gray-600 uppercase">Status</th>
                                <th class="p-4 text-sm font-semibold text-left text-gray-600 uppercase">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach(range(1,9) as $i)
                            <tr class="border-b border-gray-300">
                                <td class="p-4 text-sm font-medium text-gray-700">$20,000 <span class="text-gray-600">USD</span> </td>
                                <td class="flex items-center p-4 text-sm text-gray-600">
                                    <span><svg class="w-4 text-gray-500 fill-current" version="1.1" id="Wallet" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                        y="0px" viewBox="0 0 20 20" enable-background="new 0 0 20 20" xml:space="preserve">
                                        <path d="M16,6H3.5V5.5l11-0.88V5.5H16V4c0-1.1-0.891-1.872-1.979-1.717L3.98,3.717C2.891,3.873,2,4.9,2,6v10
                                    	c0,1.104,0.895,2,2,2h12c1.104,0,2-0.896,2-2V8C18,6.896,17.104,6,16,6z M14.5,13.006c-0.828,0-1.5-0.672-1.5-1.5s0.672-1.5,1.5-1.5
                                    	s1.5,0.672,1.5,1.5S15.328,13.006,14.5,13.006z" />
                                    </svg></span>
                                    <span class="ml-1">Payment to Molly Sanders</span>
                                </td>
                                <td class="p-4 text-sm">
                                    @if($i % 2 == 0 || $i > 6)
                                        <span class="px-2 py-1 text-xs font-semibold text-green-700 bg-green-200 rounded-full">Success</span>
                                    @elseif($i == 3)
                                        <span class="px-2 py-1 text-xs font-semibold text-gray-700 bg-gray-200 rounded-full">Failed</span>
                                    @else
                                        <span class="px-2 py-1 text-xs font-semibold text-yellow-700 bg-yellow-200 rounded-full">Processing</span>
                                    @endif
                                </td>
                                <td class="p-4 text-sm text-gray-600">Sept 2{{ $i }}, 2019</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
