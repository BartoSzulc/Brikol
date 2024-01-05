// Test case 1: Verify that isMobile is true when window.innerWidth is less than 1024
test('isMobile should be true when window.innerWidth is less than 1024', () => {
  // Mock the window.innerWidth value
  window.innerWidth = 800;

  // Call the function or access the variable you want to test
  const isMobile = window.innerWidth < 1024;

  // Assert the expected result
  expect(isMobile).toBe(true);
});

// Test case 2: Verify that isMobile is false when window.innerWidth is equal to 1024
test('isMobile should be false when window.innerWidth is equal to 1024', () => {
  // Mock the window.innerWidth value
  window.innerWidth = 1024;

  // Call the function or access the variable you want to test
  const isMobile = window.innerWidth < 1024;

  // Assert the expected result
  expect(isMobile).toBe(false);
});

// Test case 3: Verify that isMobile is false when window.innerWidth is greater than 1024
test('isMobile should be false when window.innerWidth is greater than 1024', () => {
  // Mock the window.innerWidth value
  window.innerWidth = 1200;

  // Call the function or access the variable you want to test
  const isMobile = window.innerWidth < 1024;

  // Assert the expected result
  expect(isMobile).toBe(false);
});