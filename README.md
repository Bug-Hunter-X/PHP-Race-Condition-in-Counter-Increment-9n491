# PHP Race Condition in Counter Increment

This repository demonstrates a common race condition in PHP that can occur when multiple threads or processes access and modify a shared resource concurrently.

## The Problem

The `bug.php` file contains a simple counter implementation. The `increaseCounter` function attempts to increment a counter stored in a file. However, without proper synchronization mechanisms, concurrent requests can lead to incorrect counter values.

## The Solution

The `bugSolution.php` file provides a solution using file locking to prevent race conditions.  By acquiring an exclusive lock before accessing the counter, only one process can modify it at a time, ensuring data integrity.

## How to Reproduce

1.  Clone this repository.
2.  Run `bug.php` from multiple terminals or browser tabs concurrently.
3. Observe that the counter does not increase accurately.
4. Run `bugSolution.php` in the same manner and observe that the counter increments correctly.

## Key Concepts

* **Race Conditions:** A race condition occurs when the outcome of a program depends on the unpredictable order in which multiple threads or processes execute.
* **File Locking:** File locking provides a mechanism for synchronizing access to shared resources, ensuring that only one process can modify a file at a time.